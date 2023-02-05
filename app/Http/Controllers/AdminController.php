<?php

namespace App\Http\Controllers;

use App\Helper\AdminHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AddSermonRequest;
use App\Http\Requests\AdminLiveViewUpdate;
use App\Http\Requests\UpdateSermonRequest;

class AdminController extends Controller
{
    private $adminHelper;

    public function __construct(AdminHelper $adminHelper)
    {
        $this->adminHelper = $adminHelper;
    }

    public function index()
    {
        $live = $this->adminHelper->getLiveViewContent();
        return view('admin.liveview', compact('live'));
    }

    public function liveview(AdminHelper $adminHelper)
    {
        $live = $this->adminHelper->getLiveViewContent();
        return view('admin.editview', compact('live'));
    }

    public function liveviewsubmit(AdminLiveViewUpdate $req)
    {
        $validated = $req->validated();
        $this->adminHelper->updateLiveViewContent($validated);
        return redirect()->route('admin.index')->with(['success' => 'Live View URL Successfully Updated']);
    }

    public function sendliveviewnotification()
    {
        $live = $this->adminHelper->getLiveViewContent();
        $response = $this->adminHelper->sendLiveViewNotification($live[0]);

        if ($response == false) {
            return back()->with(['errors' => 'Unable To Sent One Signal Nofication']);
        }

        $this->adminHelper->updateLiveViewNotification();
        return back()->with(['success' => 'One Signal Nofication Successfully Sent To Active Subscribers']);
    }

    public function sermon()
    {
        $sermons = $this->adminHelper->getSermonPaginated();
        return view('admin.sermon', compact('sermons'));
    }

    public function sermonadd()
    {
        return view('admin.sermonadd');
    }

    public function sermonaddsubmit(AddSermonRequest $req)
    {
        $validated = $req->validated();
        $imageName = time() . '_' . rand(1, 100) . '.' . $req->file('thumbnail_image')->getClientOriginalExtension();
        $req->thumbnail_image->move(public_path('/images/service-thumbnail'), $imageName);
        $this->adminHelper->addNewSermon($validated, $imageName);
        return redirect()->route('admin.sermon')->with(['success' => 'New Sermon/Message Successfully Added']);
    }

    public function sermonsendnotification(Request $req)
    {
        abort_if(!isset($req->sermonId), 404);
        $sermon = $this->adminHelper->getSingleSermonNotification($req->sermonId);
        abort_if(count($sermon) <= 0, 404);

        $response = $this->adminHelper->sermonNotification($sermon[0]);
        if ($response == false) {
            return back()->with(['errors' => 'Unable To Send One Signal Nofication']);
        }

        $this->adminHelper->updateSermonNotification($req->sermonId);
        return back()->with(['success' => 'One Signal Nofication Successfully Sent To Active Subscribers']);
    }

    public function sermondelete($id, $slug)
    {
        abort_if($this->adminHelper->confirmSermonParameters($id, $slug) == false, 404);
        try {
            $this->adminHelper->deleteSermon($id, $slug);
        } catch (\Exception $e) {
            return back()->with(['errors' => 'Unable To Delete Sermon | Please Try Again']);
        }
        return back()->with(['success' => 'Sermon Successfully Deleted']);
    }

    public function sermonedit($id, $slug)
    {
        $sermon = $this->adminHelper->confirmSermonParameters($id, $slug);
        abort_if($sermon == false, 404);
        return view('admin.sermonedit', compact('sermon'));
    }

    public function sermoneditsubmit(UpdateSermonRequest $req, $id, $slug)
    {
        $validated = $req->validated();
        $sermon = $this->adminHelper->confirmSermonParameters($id, $slug);

        if($req->hasFile('thumbnail_image')) {
            if ($req->thumbnail_image->extension() != "webp") {
                return back()->withErrors(['Error | Uploaded Image must be of webp extension']);
            }
            if ($req->thumbnail_image->getSize() > 100000) {
                return back()->withErrors(['Error | Uploaded Image must be not be more than 100kb']);
            }
            unlink(public_path('images/service-thumbnail/' . $sermon[0]->thumbnail_url));
            $imageName = time() . '_' . rand(1, 100) . '.' . $req->file('thumbnail_image')->getClientOriginalExtension();
            $req->thumbnail_image->move(public_path('/images/service-thumbnail'), $imageName);
        }

        try {
            if ($req->hasFile('thumbnail_image')) {
                $this->adminHelper->updateSermonWithImage($validated, $imageName, $id, $slug);
            } else {
                $this->adminHelper->updateSermonWithoutImage($validated, $id, $slug);
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.sermon')->with(['errors' => 'Error | Unable To Update Sermon/Message | Please Try Again']);
        }
        return redirect()->route('admin.sermon')->with(['success' => 'Sermon/Message Successfully Updated']);
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('/');
    }
}

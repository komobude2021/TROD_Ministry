@extends('admin.app')

@section('breadcrumb')
	<div class="mr-auto">
		<h1 class="separator">Live View Streaming</h1>
		<nav class="breadcrumb-wrapper" aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i></a></li>
				<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Live View</li>
			</ol>
		</nav>
	</div>
@endsection

@section('content')
	<div class="row">
		<div class="col-12">
			<div class="card">

				<h5 class="card-header"></h5>

				<div class="card-body" style="padding-bottom: 50px">
					<div id="bs4-table_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
						<div class="row">
							<div class="col-sm-12 col-md-12">
								
								<form name="form1" id="form1" method="POST" action="{{ route('admin.liveviewsubmit') }}">
									@csrf
									<div class="form-group">
									  <label><span style="color: #900"><i class="fa fa-dot-circle-o" style="color: #900"></i> Title:</span></label>
									  <input type="text" class="form-control" name="title" value="{{ ucwords($live[0]->title) }}" required>
									</div>

									<div class="form-group" style="padding-top: 15px">
									  <label><span style="color: #900"><i class="fa fa-dot-circle-o" style="color: #900"></i> Description:</span></label>
									  <textarea name="description" class="form-control" rows="2" required>{{ ucwords($live[0]->description) }}</textarea>
									</div>

									<div class="form-group" style="padding-top: 15px">
										<label><span style="color: #900"><i class="fa fa-dot-circle-o" style="color: #900"></i> Embedded URL:</span></label>
										<input type="text" name="url" class="form-control" name="title" value="{{ $live[0]->url }}" required>
									</div>

									<div class="form-group" style="padding-top: 15px">
										<label><span style="color: #900"><i class="fa fa-dot-circle-o" style="color: #900"></i> Embedded Platform:</label>
										<select name="platform" class="form-control" required>
										  <option value="youtube" 
										  @if ($live[0]->platform == "youtube")
											{{ "selected" }}
										  @endif
										  >YouTube</option>
										  <option value="facebook"
											@if ($live[0]->platform == "facebook")
												{{ "selected" }}
											@endif
										  >Facebook</option>
										</select>
									</div>

									<div class="form-group" style="padding-top: 15px">
										<button type="submit" class="btn btn-primary"><i class="fa fa-refresh" style="color:#fff"></i> Update Live Streaming URL</button>
									</div>

								</form>

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection
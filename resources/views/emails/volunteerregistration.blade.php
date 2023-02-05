@component('mail::message')
# Hello {{ strtoupper($validated['lastname'] . " " . $validated['firstname']) }}

Thank You For Volunteering To Be An Active Member of The Root Of David (TROD) Volunteering Outreach Team.

We pray and faithfully believe that, as you have volunteered your time to spread the Gospel of Jesus Christ, as well as to spread His love to Humanity, 
the Grace and Mercy of Our Lord and Savior Jesus Christ will always abide with you and your entire Household.

We will periodically share with you our latest volunteer opportunities, inspiring stories and information about our previous outreach.


Stay Blessed, <b>{{ strtoupper($validated['firstname']) }}</b>

Warm Regards,<br>
The Root Of David Ministry - TROD.

<br/><hr/>
@endcomponent

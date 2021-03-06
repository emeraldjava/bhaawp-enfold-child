<?php 
/**
 * The single event template
 */
echo "<div eventid='#_EVENTID' postid='#_EVENTPOSTID'>
[av_one_full first]
[av_heading tag='h1' padding='10' heading='#_LOCATIONNAME - #_EVENTNAME' color='' style='blockquote modern-quote' custom_font='' size='' subheading_active='' subheading_size='15' custom_class='']
#_EVENTDATES at #_EVENTTIMES
[/av_heading]
[av_image src='#_ATT{bhaa_event_image}' attachment='' attachment_size='full' align='center' animation='no-animation' link='' target='' styling='' caption='' font_size='' appearance='' custom_class=''][/av_image]
		
[av_heading heading='<strong>When:</strong> #_EVENTDATES at #_EVENTTIMES' tag='h2' style='blockquote modern-quote' size='' subheading_active='subheading_below' subheading_size='15' padding='20' color='' custom_font='' custom_class='']
<strong>Start:</strong> #_ATT{bhaa_start_type}. <strong>Distance:</strong> #_ATT{bhaa_race_1} #_ATT{bhaa_race_2}
[/av_heading]
[/av_one_full]
{is_future}
<!-- RACE INFO | ONLINE ENTRY | COURSE MAP | LOCATION MAP | <a href='./#standards'>STANDARDS</a> -->
		
[av_section color='main_color' custom_bg='' src='' attach='scroll' position='top left' repeat='no-repeat' video='' video_ratio='16:9' video_mobile_disabled='' min_height='' padding='default' shadow='no-shadow' id='']
[av_one_full]
[av_notification title='' color='custom' border='' custom_bg='#37589b' custom_font='#ffffff' size='large' icon_select='no' icon='ue800' font='entypo-fontello' custom_class='']
#_EVENTNAME
[/av_notification]

[av_textblock custom_class='' position='center']
#_EVENTIMAGE
[/av_textblock]

[av_hr class='default' height='50' shadow='no-shadow' position='center']

[av_textblock custom_class='']
<span style='font-size: 14pt;'>#_EVENTNOTES</span>
[/av_textblock]

[/av_one_full]
[/av_section]

[av_section color='main_color' custom_bg='' src='' attach='scroll' position='top left' repeat='no-repeat' video='' video_ratio='16:9' video_mobile_disabled='' min_height='' padding='default' shadow='no-shadow' id='']
[av_one_full]
[av_notification title='' color='custom' border='solid' custom_bg='#6fa640' custom_font='#ffffff' size='large' icon_select='no' icon='ue800' font='entypo-fontello' custom_class='']
ONLINE ENTRY
[/av_notification]
[av_textblock custom_class='']
[event event=150]#_BOOKINGFORM[/event]
[/av_textblock]
			
[/av_one_full]
[/av_section]

[av_section color='main_color' custom_bg='#f7f7f7' src='' attachment='' attachment_size='' attach='scroll' position='top left' repeat='no-repeat' video='' video_ratio='16:9' min_height='' padding='default' shadow='no-shadow' id='' custom_class='']
[av_one_full]
[av_notification title='' color='custom' border='' custom_bg='#fc9b00' custom_font='#ffffff' size='large' icon_select='no' icon='ue800' font='entypo-fontello' custom_class='']
Google Map and Directions
[/av_notification]

[av_textblock custom_class='']
<span style='font-size: 14pt;'>#_LOCATIONMAP</span>

[/av_textblock]

[av_textblock custom_class='']
<strong>Location</strong> : #_LOCATIONNAME
#_LOCATIONFULLBR
#_LOCATIONNOTES
[/av_textblock]
[/av_one_full]
[/av_section]

[av_section color='main_color' custom_bg='#f7f7f7' src='' attachment='' attachment_size='' attach='scroll' position='top left' repeat='no-repeat' video='' video_ratio='16:9' min_height='' padding='default' shadow='no-shadow' id='' custom_class='']
[av_one_full]
[av_notification title='' color='custom' border='solid' custom_bg='#ff3030' custom_font='#ffffff' size='large' icon_select='no' icon='ue800' font='entypo-fontello' custom_class='']
Details
[/av_notification]

[av_toggle_container initial='1' mode='accordion' sort='' custom_class='']
[av_toggle title='Day | Date | Time | Distance | Surface' tags='']
<span style='font-size: 14pt;'><strong>When:</strong> #_EVENTDATES at #_EVENTTIMES</span><br/>
<span style='font-size: 14pt;'><strong>Surface:</strong> #_CATEGORYNAME</span><br/>
<span style='font-size: 14pt;'><strong>Start:</strong> #_ATT{bhaa_start_type}</span><br/>
<span style='font-size: 14pt;'><strong>Distance:</strong> #_ATT{bhaa_race_1} #_ATT{bhaa_race_2}</span>
[/av_toggle]
[av_toggle title='Registration + Race Number Collection' tags='']
<span style='font-size: 14pt;'><strong>Location:</strong>#_LOCATIONNAME from 9:30am to 10:30am</span><br/>
<span style='font-size: 14pt;'>Race Registration and Payment online or on the day.</span>
[/av_toggle]
[av_toggle title='Chip Timing' tags='']
<span style='font-size: 14pt;'>Yes we have Chip Timing at all our races.</span><br/>
<span style='font-size: 14pt;'>All Race Numbers are embedded with an electronic chip that records your race time.</span><br/>
<img class='alignleft size-full wp-image-3937' src='https://demo.bhaa.ie/wp-content/uploads/2014/10/Finish-Line-BHAA-Race.jpg' alt='Finish-Line-BHAA-Race' width='500' height='333' /><br/>
<p class='none'><span style='font-size: 14pt;'><br class='none' />Your time starts when the race starts.</span></p><br/>
<p class='none'><span style='font-size: 14pt;'>Your time stops when you pass over the Finish line timing mat.</span></p><br/><br/>
<p class='none'><span style='font-size: 14pt;'>Your time will be posted on our website Results page after the race.</span></p>
[/av_toggle]
[av_toggle title='Post Race Reception' tags='']
<span style='font-size: 14pt;'>All BHAA races finish with a post race Reception and Prize giving on site with complimentary Tea, Coffee, Water and snacks such as our famous Brack!�</span>
<img class='alignleft size-full wp-image-3940' src='https://demo.bhaa.ie/wp-content/uploads/2014/10/Refreshments.jpg' alt='BHAA-Post-Race-Refreshments' width='500' height='333' />
[/av_toggle]
[av_toggle title='Prizes + Prize Giving' tags='']
There are prizes for all Categories at the race.

1st, 2nd, 3rd Female Finishers

1st, 2nd, 3rd Male Finishers

All Age Categories

Team Prizes

There are also 15 Prizes at each event.

<img class='alignleft size-full wp-image-3941' src='https://demo.bhaa.ie/wp-content/uploads/2014/10/Prizes-BHAA-Races.jpg' alt='Prizes-BHAA-Races' width='500' height='500' />

Prizes
[/av_toggle]
[av_toggle title='Who Can Enter The Race?' tags='']
<span style='font-size: 14pt;'>Male or Female Adults who are 18 years of age or over.</span>
<span style='font-size: 14pt;'><strong><span style='color: #ff0000;'><br class='none' />YOU DO NOT</span></strong> have to be a BHAA Member.</span>
<span style='font-size: 14pt;'><strong><span style='color: #ff0000;'>YOU DO NOT</span></strong> have to be an employee of any Business.</span>
<span style='font-size: 14pt;'><strong><span style='color: #ff0000;'>YOU DO NOT</span></strong> have to be a member of any running club.</span>
<br class='none' /><span style='font-size: 14pt;'>It's open to Everyone and all are very Welcome.</span>
<span style='font-size: 14pt;'>#_ATT{bhaa_cost_member}{BHAA Members 10€} per race they run in.</span>
<span style='font-size: 14pt;'>#_ATT{bhaa_cost_daymember}{Online Day Member 15€} per race when they pre-register and run in.</span>
<span style='font-size: 14pt;'>On the day Registration costs #_ATT{bhaa_cost_daymember_offline}{Offline Day Member 20€} per race.</span>
<span style='font-size: 14pt;'>Annual membership costs 15€, if you wish to join the BHAA for a year just click the button.</span>
[av_button label='Join Now' link='page,2151' link_target='' color='red' custom_bg='#444444' custom_font='#ffffff' size='medium' position='left' icon_select='yes' icon='ue897' font='entypo-fontello' custom_class='']
[/av_toggle]
[av_toggle title='Race Entry Fee' tags='']
<span style='font-size: 14pt;'>#_ATT{bhaa_cost_member}{BHAA Members 10€}</span>
<span style='font-size: 14pt;'>#_ATT{bhaa_cost_daymember}{Online Day Member 15€}</span>
<span style='font-size: 14pt;'>#_ATT{bhaa_cost_daymember}{Offline Day Member 20€}</span>
<span style='font-size: 14pt;'>You can enter online on this page to the right or enter on the day before the race and pay by Cash.</span>
<span style='font-size: 14pt;'>This gets you Race Entry with Chip Timing on Race No. and FREE Post Race Refreshments!</span>
<span style='font-size: 14pt;'>BHAA Membership costs 15€ for the year and gets you a 5€ (33%) discount on all 25 races for one year.</span>
<span style='font-size: 14pt;'>To become a BHAA member just click this button;</span>
<span style='font-size: 14pt;'>[av_button label='Join Now' link='page,2151' link_target='' color='red' custom_bg='#444444' custom_font='#ffffff' size='medium' position='left' icon_select='yes' icon='ue897' font='entypo-fontello' custom_class='']</span>
[/av_toggle]
[av_toggle title='Race Organiser Contact Details' tags='']
<span style='font-size: 14pt;'><strong>Name:</strong>#_ATT{bhaa_contact_name}</span>
<span style='font-size: 14pt;'><strong>Email:</strong>#_ATT{bhaa_contact_number}</span>
<span style='font-size: 14pt;'><strong>Mobile:</strong>#_ATT{bhaa_contact_email}</span>
[/av_toggle]
[av_toggle title='Facilities' tags='']
<span style='font-size: 14pt;'>There are Changing, Shower and Toilet facilites at all BHAA events.</span>
<span style='font-size: 14pt;'>The BHAA accept no responsibility for belongings or possessions left unattended on site during the race.</span>
[/av_toggle]
[av_toggle title='Bag Drop?' tags='']
<span style='font-size: 14pt;'>The BHAA does not offer an official Bag Drop.</span>
<span style='font-size: 14pt;'>Participants often leave a bag at the registration hall which is staffed for the entire race proceedings.</span>
<span style='font-size: 14pt;'>The BHAA accept no responsibility for belongings or possessions left unattended on site during the race.</span>
[/av_toggle]
[av_toggle title='Water Stations' tags='']
<span style='font-size: 14pt;'>The BHAA races do not operate water stations as they are not required for our short distance races.</span>
[/av_toggle]
[/av_toggle_container]
[/av_one_full]
[/av_section]

[av_section color='main_color' custom_bg='#f7f7f7' src='' attachment='' attachment_size='' attach='scroll' position='top left' repeat='no-repeat' video='' video_ratio='16:9' min_height='' padding='default' shadow='no-shadow' id='standards' custom_class='']
[av_one_full first]
[av_notification title='' color='custom' border='' custom_bg='#37589b' custom_font='#ffffff' size='large' icon_select='no' icon='ue800' font='entypo-fontello' custom_class='']
Race Standards
[/av_notification]
[av_textblock custom_class='']
The BHAA stardard times for these races
#_BHAASTANDARDS
<a href='https://demo.bhaa.ie/bhaa/standards'>Read more about BHAA standards.</a>
[/av_textblock]
[/av_one_full]
[/av_section]
			
[av_one_full first]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Comments[/av_notification]
[av_comments_list]
[/av_one_full]
{/is_future}

{is_past}
[av_one_full first]
[av_tab_container position='top_tab' boxed='border_tabs' initial='1' custom_class='']
[av_tab title='Results' icon_select='yes' icon='ue84b' font='entypo-fontello']
#_BHAARACERESULTS
[/av_tab]
[av_tab title='Team Results' icon_select='yes' icon='ue84c' font='entypo-fontello']
#_BHAATEAMRESULTS
[/av_tab]
[/av_tab_container]
[/av_one_full]

[av_one_full first]
[av_notification title='' color='custom' border='solid' custom_bg='#012C52' custom_font='#ffffff' size='normal']Comments[/av_notification]
[av_comments_list]
[/av_one_full]
{/is_past}
</div>";
?>
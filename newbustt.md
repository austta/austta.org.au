---
layout: page
title: Newcastle and Hunter Valley Timetables.
---
Last Updated August 2018

{% for timetable in site.data.nsw %}
{% if timetable.Region == "Newcastle" %}
{% if timetable.SupercededDate == nil %}
{% if last_operator != timetable.ServiceProvider %}
{% if last_operator != nil %}
</tbody>
</table>
{% endif %}
{% assign last_operator = timetable.ServiceProvider %}
## {{last_operator}}
{% assign operator_url = nil %}
{% if last_operator == "Keolis Downer Newcastle" %}
{% assign operator_url = "https://www.newcastletransport.info" %}
{% endif %}
{% if last_operator == "Port Stephens Coaches" %}
{% assign operator_url = "http://www.pscoaches.com.au" %}
{% endif %}
{% if last_operator == "Rover Coaches" %}
{% assign operator_url = "http://www.rovercoaches.com.au" %}
{% endif %}
{% if last_operator == "CDC Hunter" %}
{% assign operator_url = "http://www.cdcbus.com.au" %}
{% endif %}
{% if last_operator == "Sid Foggs" %}
{% assign operator_url = "http://www.sidfoggs.com.au" %}
{% endif %}
{% if last_operator == "Central Coast Ferries" %}
{% assign operator_url = "http://www.centralcoastferries.com.au" %}
{% endif %}
{% if last_operator == "Port Stephens Ferries" %}
{% assign operator_url = "http://www.portstephensferryservice.com.au" %}
{% endif %}
{% if operator_url != nil %}
{{last_operator}} timetables - <a href="{{operator_url}}">{{operator_url}}</a>
{% endif%}
<table>
<tbody>
<tr>
<th style="text-align:left">Description</th>
<th style="text-align:left">Routes</th>
<th>Effective</th>
<th>Distribution List</th>
</tr>
{% endif %}
<tr>
<td style="text-align:left">{{timetable.RouteDescription}}</td>
<td style="text-align:left">{{timetable.RouteNumbers}}</td>
<td>{{timetable.EffectiveDates}}</td>
<td style="text-align:center">{{timetable.DistributionList}}</td>
</tr>
{% endif %}
{% endif %}
{% endfor %}
</tbody>
</table>
This table is derived from [this CSV file](https://github.com/austta/austta.org.au/blob/master/_data/nsw.csv) which is in a similar format as the National TimeTable Collection. Feel free to download, modify and submit changes!

---
layout: page
title: List of Current Adelaide Public Transport Timetables
---

This is a list of current timetables for
[Adelaide Metro](https://www.adelaidemetro.com.au). Each row
in the table represents either an individual paper or PDF timetable.

Historical timetables can be found on the [historical list](./adelaidehistory.html).

Adelaide services are  operated   by:

* Torrens Transit - Bus
* Adelaide Metro - Trams and Trains

Note that a timetable may appear several times as the list includes:

* The generally available printed timetable, even if out of date
* Available online and current
* Available online, out of date, but more recent than a current distribution list
* Available online and proposed even if the start date has passed
* More than one version in print with the same commencement date

(This text last updated August 2019, list more frequently)

You can sort each column by pressing on the heading if you wish.

<table class="sortable">
<tbody>
<tr>
<th style="text-align:left">Description</th>
<th style="text-align:left">Routes</th>
<th>Effective</th>
<th>Revision Number</th>
<th>Distribution List</th>
</tr>
{% for timetable in site.data.adelaide %}
{% if timetable.SupercededDate == nil %}
<tr>
<td style="text-align:left">{{timetable.RouteDescription}}</td>
<td style="text-align:left">{{timetable.RouteNumbers}}</td>
<td>{{timetable.EffectiveDates}}</td>
<td style="text-align:center">{{timetable.VersionNumber}}</td>
<td style="text-align:center">{{timetable.DistributionList}}</td>
</tr>
{% endif %}
{% endfor %}
</tbody>
</table>
This table is derived from [this YAML file](https://github.com/austta/austta.org.au/blob/master/_data/adelaide.yaml) which is in the same format as the National TimeTable Collection. Feel free to download, modify and submit changes!

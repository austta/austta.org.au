---
layout: page
title: List of Adelaide Public Transport Timetables
---

This is a list of current timetables for Adelaide Metro. Each Row
in the table represents either an individual paper or PDF timetable.

Last Updated 17th August 2014 (Buses) 2 February 2016 (Rail)

<table>
<tbody>
<tr>
<th style="align:left">Description</td>
<th style="align:left">Routes</td>
<th>Effective</td>
<th>Revision Number</td>
</tr>
{% for timetable in site.data.adelaide %}
<tr>
<td style="align:left">{{timetable.RouteDescription}}</td>
<td style="align:left">{{timetable.RouteNumbers}}</td>
<td>{{timetable.EffectiveDates}}</td>
<td>{{timetable.VersionNumber}}</td>
</tr>
{% endfor %}
</tbody>
</table>
This table is derived from [this CSV file](https://github.com/austta/austta.org.au/blob/master/_data/adelaide.csv) which is in the same format as the National TimeTable Collection. Feel free to download, modify and submit changes!

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
<th>Revision Date</td>
</tr>
{% for timetable in site.data.adelaide %}
<tr>
<td style="align:left">{{timetable.Description}}</td>
<td style="align:left">{{timetable.Routes}}</td>
<td>{{timetable.Effective}}</td>
<td>{{timetable.RevNumber}}</td>
<td>{{timetable.RevDate}}</td>
</tr>
{% endfor %}
</tbody>
</table>

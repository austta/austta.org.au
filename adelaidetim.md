---
layout: page
title: List of Adelaide Public Transport Timetables
---

Last Updated 17th August 2014

<table>
<tbody>
<tr>
<th style="align:left">Operator</td>
<th style="align:left">Description</td>
<th style="align:left">Routes</td>
<th style="align:left">Effective</td>
</tr>
{% for timetable in site.data.adelaide %}
<tr>
<td style="align:left">{{timetable.Operator}}</td>
<td style="align:left">{{timetable.Description}}</td>
<td style="align:left">{{timetable.Routes}}</td>
<td style="align:left">{{timetable.Effective}}</td>
</tr>
{% endfor %}
</tbody>
</table>

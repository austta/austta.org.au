---
layout: page
title: List of Historical Adelaide Public Transport Timetables
---

This is a list of historical timetables for
[Adelaide Metro](https://www.adelaidemetro.com.au), State Transport Authority, Municipal Tramways Trust, South Australian Railways and other historical operators in Adelaide. Each row
in the table represents either an individual paper or PDF timetable.

Current timetables can be found on the [current list](./adelaidetim.html).

(This text last updated August 2019, list more frequently)

<table>
<tbody>
<tr>
<th style="text-align:left">Description</th>
<th style="text-align:left">Routes</th>
<th>Effective</th>
<th>Superceded</th>
<th>Revision Number</th>
<th>Distribution List</th>
</tr>
{% for timetable in site.data.adelaide %}
{% if timetable.SupercededDate != nil %}
<tr>
<td style="text-align:left">{{timetable.RouteDescription}}</td>
<td style="text-align:left">{{timetable.RouteNumbers}}</td>
<td>{{timetable.EffectiveDates}}</td>
<td>{{timetable.SupercededDate}}</td>
<td style="text-align:center">{{timetable.VersionNumber}}</td>
<td style="text-align:center">{{timetable.DistributionList}}</td>
</tr>
{% endif %}
{% endfor %}
</tbody>
</table>
This table is derived from [this YAML file](https://github.com/austta/austta.org.au/blob/master/_data/adelaide.yaml) which is in the same format as the National TimeTable Collection. Feel free to download, modify and submit changes!

@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === '')
<img src="img/jhm-icon.ico" class="logo" alt="JHM Motores">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>

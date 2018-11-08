
@foreach($archi as $archi)
<div><a href="{{Storage::url($archi->lista)}}" title="descargar">{{Storage::url($archi->lista)}}</a></div>
<img width="100px" src="{{Storage::url($archi->lista)}}" >
@endforeach

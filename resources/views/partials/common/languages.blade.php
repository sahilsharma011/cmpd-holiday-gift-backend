@if(count($languages))
    <ul class="languages text-center">
        @foreach($languages as $lang)
            <li>
                @if($lang->flag)
                    <img class="img-circle chosen-one" title="{{ $lang->title }}"
                         src="{{ url($lang->flag) }}" alt="{{ $lang->code }}"  value="{{ $lang->code }}" />
                @else
                    {{ strtoupper($lang->code) }}
                @endif
            </li>
        @endforeach
        {!! Form::open(['method' => 'POST', 'route' => $route, 'id' => 'anakin-skywalker']) !!}
            {!! Form::hidden('language') !!}
        {!! Form::close() !!}
    </ul>
    <script>
        $('img.chosen-one').click(function(){
            $('input[name="language"]').val($(this).attr("alt"));
            $('#anakin-skywalker').submit();
        });
    </script>
@endif
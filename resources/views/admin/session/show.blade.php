@extends('layouts.admin')

@section('content')
    @foreach($time as $day )
        <p>{{$day}}</p>
        @endforeach
<script>
    // unixTimeZero = Date.parse('12-02-2022');
    // var someDate = new Date();

    @foreach($time as $day)
    var d = new Date("{{$day}}");
    var numberOfDaysToAdd = 7;
    // d.setDate(d.getDate() + numberOfDaysToAdd);
    var n = d.toDateString();
    document.write(n);

    document.write("                <table class=\"table table-condensed\">\n" +
        "                  <thead>\n" +
        "                    <tr>\n" +
        "                      <th style=\"width: 10px\">#</th>\n" +
        "                      <th>Task</th>\n" +
        "                      <th>Progress</th>\n" +
        "                      <th style=\"width: 40px\">Label</th>\n" +
        "                    </tr>\n" +
        "                  </thead>\n" +
        "                  <tbody>");

    for( i = 0 ;  i<{{$az}} ; i++){
        document.write("<tr>\n" +
            "                      <td>"+i+".</td>\n" +
            "                      <td>"+n+"</td>\n" +
            "                      <td>\n" +
            "                        <div class=\"progress progress-xs\">\n" +
            "                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>\n" +
            "                        </div>\n" +
            "                      </td>\n" +
            "                      <td><span class=\"badge bg-danger\">55%</span></td>\n" +
            "                    </tr>");
        d.setDate(d.getDate() + numberOfDaysToAdd);
        n = d.toDateString();
    }
    document.write("                  </tbody>\n" +
        "   " +
        "             </table>");

    @endforeach
</script>
@endsection

@extends('layouts.admin')

@section('content')
<script>
    // unixTimeZero = Date.parse('12-02-2022');
    // var someDate = new Date();
    // var numberOfDaysToAdd = 1;
    // someDate.setDate(someDate.getDate() + numberOfDaysToAdd);
    var d = new Date("{{$time}}");
    var n = d.toTimeString();
    document.write(d);
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
            "                      <td>Update software</td>\n" +
            "                      <td>\n" +
            "                        <div class=\"progress progress-xs\">\n" +
            "                          <div class=\"progress-bar progress-bar-danger\" style=\"width: 55%\"></div>\n" +
            "                        </div>\n" +
            "                      </td>\n" +
            "                      <td><span class=\"badge bg-danger\">55%</span></td>\n" +
            "                    </tr>");

    }
    document.write("                  </tbody>\n" +
        "                </table>");
</script>
@endsection

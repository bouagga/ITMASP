@extends('layouts.admin')

@section('content')
{{--    @foreach($time as $day )--}}
{{--        <p>{{$day}}</p>--}}
{{--        @endforeach--}}
<script>
    // unixTimeZero = Date.parse('12-02-2022');
    // var someDate = new Date();
    document.write(" <div class=\"row\">");
    @foreach($time as $day)
    var d = new Date("{{$day}}");
    var numberOfDaysToAdd = 7;
    // d.setDate(d.getDate() + numberOfDaysToAdd);
    var n = d.toDateString();
    var b = d.getDay();

    var  weekday=new Array(7);
    weekday[0]="Dimanche";
    weekday[1]="Lundi";
    weekday[2]="Mardi";
    weekday[3]="Mercredi";
    weekday[4]="Jeudi";
    weekday[5]="Vendredi";
    weekday[6]="Samedi";
    // document.write(n);
    document.write("<div class=\"col-md-{{$col}}\">\n" +
        "          <div class=\"card card-primary\">\n" +
        "            <div class=\"card-header\">\n" +
        "              <h3 class=\"card-title\">"+weekday[b]+"</h3>\n" +
        "\n" +
        "              <div class=\"card-tools\">\n" +
        "                <button type=\"button\" class=\"btn btn-tool\" data-card-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\">\n" +
        "                  <i class=\"fas fa-minus\"></i></button>\n" +
        "              </div>\n" +
        "            </div>\n" +
        "            <div class=\"card-body\">");


    for( i = 0 ;  i<{{$az}} ; i++){

        document.write("                <div class=\"d-flex justify-content-between align-items-center border-bottom mb-3\">\n" +
            "                  <p class=\"text-success text-xl\">\n" +
            "                    <i class=\"far fa-calendar-alt \"></i>\n" +
            "                  </p>\n" +
            "                  <p class=\"d-flex flex-column text-right\">\n" +
            "                    <span class=\"text-muted\"><strong>"+n+"</strong></span>\n" +
            "                  </p>\n" +
            "                </div>\n");
        d.setDate(d.getDate() + numberOfDaysToAdd);
        n = d.toDateString();
    }
    document.write("            </div>\n" +
        "            <!-- /.card-body -->\n" +
        "          </div>\n" +
        "          <!-- /.card -->\n" +
        "        </div>");


    @endforeach
    document.write(" </div>");
</script>
@endsection

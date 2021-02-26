@extends('layouts.admin.sidebar')
<?php
$active_class = 'results';
 ?>
 @section('header_scripts')
 <link href="{{CSS}}ajax-datatables.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<!--<script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>





 @stop
 @section('content')
 <div class="right_col" role="main" style="min-height: 1714px;">
 <div id="page-wrapper">
 			<div class="container-fluid">
 				<!-- Page Heading -->
 				<div class="row">
 					<div class="col-lg-12">
 						<!-- <ol class="breadcrumb">
 							<li><a href="{{PREFIX}}"><i class="mdi mdi-home"></i></a> </li>

 						</ol> -->
          </div>
 				</div>
        <div class="row tile_count">
        <div class="x_panel">
       <!-- <div class="panel panel-custom"> -->
					<div class="panel-heading">
            <div class="pull-right dt-buttons">
                <a id="dlink" style="display:none;"></a>
                  <div id="name"></div>
                         <button id="btn">Export to Excel</button>

							<!-- <a href="" class="btn btn-default" style="background:#fff;color:#337ab7">Copy</a>
							<a href="" class="btn btn-default" style="background:#fff;color:#337ab7">CSV</a>
              <a href="" class="btn btn-default" style="background:#fff;color:#337ab7">Print</a> -->
             <!--  <button class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Copy</span></button>
              <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example" type="button"><span>CSV</span></button>
              <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Excel</span></button> -->

						</div>
            <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
            <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
            <script>
            $(document).ready(function() {
        $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ]
        } );
        } );
        </script> -->
           <h3>Exam Results </h3>
					      </div>
                    <div class="panel-body packages">
                      <div class="x_title">
          					 </div>
          					 <div class="x_content xs-col-12">
                        <div>
                        <table id="table2" class="table table-striped table-bordered datatable w-auto" cellspacing="0" width="100%">

                  <thead class="cf">
                                    <tr>
                                        <th>{{ getPhrase('user name')}}</th>
                                        <th>{{ getPhrase('email')}}</th>
                                        <th>{{getPhrase('phone')}}</th>
                                        <th>{{getPhrase('branch')}}</th>
                                        <th>{{getPhrase('college')}}</th>
                                        <th>{{getPhrase('place')}}</th>
                                        <th>{{getPhrase('night_shift')}}</th>
                                        <th>{{getPhrase('answers')}}</th>
                                        <th>{{ getPhrase('HTML')}}</th>
                                        <th>{{ getPhrase('CSS')}}</th>
                                        <th>{{ getPhrase('JavaScript')}}</th>
                                        <th>{{ getPhrase('Jquery')}}</th>
                                        <th>{{ getPhrase('PHP')}}</th>
                                        <th>{{ getPhrase('Node JS')}}</th>
                                        <th>{{ getPhrase('MySQL')}}</th>
                                        <th>{{ getPhrase('MongoDB')}}</th>
                                        <th>{{ getPhrase('Python')}}</th>
                                        <th>{{ getPhrase('basic computers')}}</th>
                                        <th>{{ getPhrase('total marks_obtained')}}</th>
                                        <th>{{ getPhrase('percentage')}}</th>
                                        <th>{{ getPhrase('exam_status')}}</th> 

                                    </tr>
                                </thead>
                    <tbody>
                          @foreach($records as $record)

                         <tr>
                         <td>{{$record->username}}</td>
                         <td>{{$record->email}} </td>
                         <td>{{$record->phone}}</td>
                         <td>{{$record->branch}}</td>
                         <td>{{$record->college}}</td>
                         <td>{{$record->place}}</td>
                         <td>{{$record->night_shift}}</td>
                         <?php  $re = json_decode($record->answers, true) ?>
                         <td><?php echo implode($re[62], ','); ?><br><?php echo implode($re[63], ','); ?><br><?php echo implode($re[64], ','); ?>
                             </td>
                          

                          <!-- <td>{{$record->subject_analysis}}</td> -->
                   @foreach(json_decode($record->subject_analysis, true) as $re)
          <!-- <td>{{$re['subject_id']}} Correct Answers: {{ $re['correct_answers']}} </td> -->
                      <td>{{ $re['correct_answers']}}</td>
                  @endforeach

                         <td>{{$record->marks_obtained}}</td>
                        <td>{{$record->percentage}}</td>
                         <td>{{$record->exam_status}}</td>
                     </tr>

                    @endforeach
                   </tbody>
                            </table>
                            </div>
                    </div>
                  </div>
<!-- </div> -->
</div>
</div>
</div>
</div>
</div>
<script>
var tableToExcel = (function () {
       var uri = 'data:application/vnd.ms-excel;base64,',
           template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
           base64 = function (s) {
               return window.btoa(unescape(encodeURIComponent(s)))
           }, format = function (s, c) {
               return s.replace(/{(\w+)}/g, function (m, p) {
                   return c[p];
               })
           }
       return function (table, name, filename) {
           if (!table.nodeType) table = document.getElementById(table)
           var ctx = {
               worksheet: name || 'Worksheet',
               table: table.innerHTML
           }

           document.getElementById("dlink").href = uri + base64(format(template, ctx));
           document.getElementById("dlink").download = filename;
           document.getElementById("dlink").traget = "_blank";
           document.getElementById("dlink").click();

       }
   })();
   function download(){
       $(document).find('tfoot').remove();
       var name = document.getElementById("name").innerHTML;
       tableToExcel('table2', 'Sheet 1', name+'.xls')
       //setTimeout("window.location.reload()",0.0000001);

   }
   var btn = document.getElementById("btn");
   btn.addEventListener("click",download);
</script>
@endsection

@section('footer_scripts')
 @include('common.datatables1', array('route'=>'users.dataTable'))
 @include('common.deletescript', array('route'=>URL_USERS_DELETE))
@stop

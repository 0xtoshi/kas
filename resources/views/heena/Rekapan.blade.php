
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        

    </head>

   <body>
                                   

                                        <center>
                                            <h4>LAPORAN KEUANGAN KARANG TARUNA KELURAHAN TIPES </h4>
                                            <h5>
                                            @if(Request::get('bulan'))
                                            BULAN <strong style="color:red"> {{ Request::get('bulan') }} </strong>
                                            @endif

                                            TAHUN <strong style="color:red"> {{ Request::get('tahun') }} </strong> <h5>
                                        
                                        </center>
		                                <br/>
                                       

                                    <table id="export" class="table mb-0 table-bordered table-hover”">
                                         
                                        <thead class="thead-dark">
                                            <tr>
                                                                                                           
                                                <th class="border-top-0 text-white">Tanggal</th>
                                                <th class="border-top-0 text-white">Diskripsi</th>
                                                <th class="border-top-0 text-white">Kredit</th>
                                                <th class="border-top-0 text-white">Debit</th>
                                                
                                                
                                            </tr><!--end tr-->
                                        </thead>
                                        <tbody>
                                        
                                        @foreach ($kas as $value)
                                            <tr>                                                       
                                                
                                                <td>{{ date("d M Y", strtotime($value->tanggal))  }}</td>
                                                <td>{{ $value->keterangan }}</td>
                                                
                                                @if( $value->tipe == 'kas_masuk' )
                                                <td>@currency($value->nominal)</td>
                                                @else
                                                <td></td>
                                                @endif

                                                @if( $value->tipe == 'kas_keluar' )
                                                <td>@currency($value->nominal)</td>
                                                @else
                                                <td></td>
                                                @endif
                                            </tr><!--end tr-->     
                                              
                                        @endforeach
                                            
                                                                 
                                        </tbody>
                                        
                                        <tfoot>
                                                    <tr class="bg-primary text-white">
                                                        <th colspan="2" class="border-0 text-white">Total </th>                                                        
                                                        <td class="border-0"><b>@currency($total_kredit)</b></td>
                                                        <td class="border-0"><b>@currency($total_debit)</b></td>
                                                    </tr>

                                                    <tr class="bg-success text-white">                                   
                                                        <td class="border-0 font-14"><b>Saldo Tersisa</b></td>
                                                        <td class="border-0 font-14"><b>@currency($total_kredit - $total_debit)</b></td>
                                                        <th colspan="2" class="border-0"></th>   
                                                    </tr>
                                        </tfoot>
                                    </table>

    
   </body>


</html>

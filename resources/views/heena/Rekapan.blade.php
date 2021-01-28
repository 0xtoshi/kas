<html>

<head>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body id="content">
    <div class="panel panel-default">
        <div class="panel-heading">
            <br />
            <h3 class="text-center"><strong> LAPORAN KEUANGAN KARANG TARUNA KELURAHAN TIPES <br /> </strong> Bulan <span
                    style="color:red"> {{ $bulan }} </span> Tahun {{ $tahun }} </h3>
        </div>
        <div class="panel-body">
            <table id="export" class="table bg-black mb-0 table-bordered table-hover”">

                <thead>
                    <tr class="bg-dark text-white">

                        <th class="border-top-0 text-white">Tanggal</th>
                        <th class="border-top-0 text-white">Diskripsi</th>
                        <th class="border-top-0 text-white">Kredit</th>
                        <th class="border-top-0 text-white">Debit</th>


                    </tr>
                    <!--end tr-->
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
                    </tr>
                    <!--end tr-->

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
        </div>
    </div>

</body>


<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"
    integrity="sha512-AtJGnumoR/L4JbSw/HzZxkPbfr+XiXYxoEPBsP6Q+kNo9zh4gyrvg25eK2eSsp1VAEAP1XsMf2M984pK/geNXw=="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"
    integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA=="
    crossorigin="anonymous"></script>

<script>
    const printDocument = () => {
    const input = document.getElementById('content');
    const divHeight = input.clientHeight
    const divWidth = input.clientWidth
    const ratio = divHeight / divWidth;

    html2canvas(input, { scale: '1' }).then((canvas) => {
        const imgData = canvas.toDataURL('image/jpeg');
        const pdfDOC = new JSPDF("l", "mm", "a0"); //  use a4 for smaller page

        const width = pdfDOC.internal.pageSize.getWidth();
        let height = pdfDOC.internal.pageSize.getHeight();
        height = ratio * width;

        pdfDOC.addImage(imgData, 'JPEG', 0, 0, width - 20, height - 10);
        pdfDOC.save('summary.pdf');   //Download the rendered PDF.
    })
    }

    printDocument();
                
</script>

</html>
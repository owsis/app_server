<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <style type="text/css">
  body {
    font-family: 'Roboto Condensed', Sans-serif;
    width: 595px;
    height: 842px;
    padding: 40px 40px;
    border: 1px solid #000;
  }
  .title {
    text-align: center;
    font-size: 14pt;
    font-weight: bold;
    line-height: .1rem;
  }
  .subtitle {
    top: 0;
    text-align: center;
    font-size: 11pt;
    line-height: .1rem;
  }
  .header {
    top: 10px;
    bottom: 0;
    margin-bottom: -5px;
    line-height: .1rem;
    text-align: justify;
    font-size: 10pt;
  }
  .enter {
    line-height: .1rem;
  }
  .desc {
    font-size: 10pt;
  }
  .desc-list {
    font-size: 9pt;
  }
  .table1 {
    font-size: 10pt;
  }
  .table-border {
    text-align: center; 
    border-bottom: 1px solid #000;
  }
</style>
</head>
<body>
  <p style="text-align: right; top: 0; line-height: .1rem;"><img src="http://i2.wp.com/thebacklightphoto.com/wp-content/uploads/2016/07/tombak-intan-real-estate-logo.png?fit=648%2C215" alt="" width="151" height="50" /></p>
  <p class="title">SURAT PESANAN RUMAH SEMENTARA</p>
  <p class="subtitle">No.SPRS.0203/{{ $date->format('m')}}-{{ $date->format('y')}}/SPR-{{ $t003s->name_unit }} {{ $t003s->no_unit }}</p>
  <p class="enter"> &nbsp; </p>
  <p class="header">&nbsp; Informasi Pemesan&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tangerang, {{ $dates }}</p>
  <hr />
  <table class="table1">
    <tbody>
      <tr>
        <td>Nama</td>
        <td>:&nbsp;</td>
        <td>{{ $t101s->name_customer }}</td>
      </tr>
      <tr>
        <td>Telepon</td>
        <td>:</td>
        <td>+{{ $t101s->phone_customer }}</td>
      </tr>
      <tr>
        <td>No. NPWP&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</td>
        <td>:</td>
        <td>{{ $t002s->npwp }}</td>
      </tr>
      <tr>
        <td>No. KTP</td>
        <td>:</td>
        <td>{{ $t002s->ktp }}</td>
      </tr>
      <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{ $t002s->email }}</td>
      </tr>
    </tbody>
  </table>
  <p class="desc">Dengan ini pemesan melakukan pemesanan unit dan penerima pesanan menyetujui pemesanan dengan perhitungan harga, rincian dan syarat serta ketentuan berlaku :</p>
  <table class="table1">
    <tbody>
      <tr>
        <td>Tipe</td>
        <td>:&nbsp;</td>
        <td>{{ $t003s->name_unit }}</td>
      </tr>
      <tr>
        <td>Luas LT/LB&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;</td>
        <td>:</td>
        <td>{{ $t003s->lt_unit }}/{{ $t003s->lb_unit }}</td>
      </tr>
      <tr>
        <td>Unit</td>
        <td>:</td>
        <td>{{ $t003s->block_unit }}/{{ $t003s->no_unit }}</td>
      </tr>
      <tr>
        <td>Harga</td>
        <td>:</td>
        <td>Rp. {{ number_format($t101s->price_unit) }}</td>
      </tr>
    </tbody>
  </table>
  <p class="desc">Selanjutnya pemesan berkewajiban untuk membayar unit pesanan dengan rincian sebagai berikut :</p>
  <table style="height: 59px; width: 100%; font-size: 10pt; border-collapse: collapse;">
    <tbody>
      <tr class="table-border">
        <td class="table-border">No</td>
        <td class="table-border">Tahap Pembayaran</td>
        <td class="table-border">Rate</td>
        <td class="table-border">Tanggal Jatuh Tempo</td>
        <td class="table-border">Jumlah Pembayaran</td>
      </tr>
      <tr>
        <td style="text-align: center;">1</td>
        <td style="text-align: center;">DP</td>
        <td style="text-align: center;">{{ $t004s->dp }}%</td>
        <td style="text-align: center;">{{ $tempos }}</td>
        <td style="text-align: center;">Rp. {{ number_format($t101s->dp) }}</td>
      </tr>
      <tr>
        <td style="text-align: center;">2</td>
        <td style="text-align: center;">KPR</td>
        <td style="text-align: center;">{{ $t004s->kpr }}%</td>
        <td style="text-align: center;">{{ $tempos }}</td>
        <td style="text-align: center;">Rp. {{ number_format($t101s->kpr) }}</td>
      </tr>
    </tbody>
  </table>
  <p class="enter">&nbsp;</p>
  <p class="desc-list" style="line-height: .1rem;">Ketentuan</p>
  <ol class="desc-list" style="margin-left: -20px;">
    <li>Unit yang sudah dipesan tidak dapat ditukar dengan unit lainnya.</li>
    <li>Uang Tanda Jadi tidak dapat dikembalikan.</li>
    <li>Pembatalan sepihak oleh pemesan maka uang yang sudah masuk tidak dapat dikembalikan.</li>
    <li>Suku bungan kredit sepenuhnya ditentukan oleh Bank Pembeli Kredit.</li>
    <li>Perubahan bangunan hanya boleh dilakukan setelah proses serah terima unit selesai dilakukan.</li>
    <li>Harga dan ketentuan dapat berubah sewaktu-waktu tanpa pemberitahuan terlebih dahulu.</li>
    <li>Besaran DP untuk cara bayar KPR minimal 10% dan dapat bertambah sesuai kebijakan yang berlaku di Bank penyedia KPR.</li>
    <li>Segala kewajiban Pemerintah yang mengakibatkan perubahan ketentuan KPR diluar tanggung jawab Penerima Pesanan.</li>
    <li>
      Khusus cara bayar dengan KPR :
      <ol style="list-style-type: lower-alpha; margin-left: -20px;">
        <li>Uang Tanda Jadi (UTJ) pilih Blok dan No unit.</li>
        <li>Berkas KPR harus dilengkapi dan diserahkan ke Penerima Pesanan paling lambat 7 hari setelah tanggal UTJ.</li>
        <li>30 hari dari tanggal UTJ maka keluar SP3K, dan paling lambat 7 hari harus sudah dilakukan akad kredit KPR.</li>
      </ol>
    </li>
    <li>Pemesan dengan ini menyatakan dan sepakat untuk memesan satuan unit rumah milik PT. Tombak Intan dengan syarat dan ketentuan yang dapat diunduh melalui <a href="http://www/tombakintan.co.id/download/syarat&amp;ketentuan">http://www/tombakintan.co.id/download/syarat&amp;ketentuan</a></li>
    <li>Apabila setelah 7 hari diterbitkannya surat ini tidak terdapat sanggahan maka pemesan dianggap telah menyetujui dan tunduk atas segala ketentuan yang berlaku</li>
  </ol>
  <p class="enter">&nbsp;</p>
  <p class="desc" style="color: #f00">Surat ini tercetak secara digital sehingga tidak perlu dibubuhi tandatnagn oleh pihak berwenang</p>
</body>
</html>
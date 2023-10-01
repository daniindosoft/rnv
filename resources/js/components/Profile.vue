<template>
    <div class="container-fluid">
        <div class="card-hover-shadow profile-responsive card-border border-success mb-3 card">
            <div class="dropdown-menu-header">
                <div class="dropdown-menu-header-inner bg-danger">
                    <div class="menu-header-content">
                        <div class="avatar-icon-wrapper btn-hover-shine mb-2 avatar-icon-xl">
                            <div class="avatar-icon rounded"><img src="https://member.remotebisnis.com/img/iconrebi.png" alt="Avatar 6"></div>
                        </div>
                        <div>
                            <h5 class="menu-header-title">McDani Saputra</h5>
                            <h6 class="menu-header-subtitle">
                                sjdlsdfk@gskld.com
                            </h6>
                        </div>
                        <div class="menu-header-btn-pane pt-2">
                            <div role="group" class="btn-group text-center">
                                <div class="nav">
                                    <a href="#tab-2-eg2" data-toggle="tab" class="btn btn-dark mr-1 ml-1 active">Pixel</a>
                                    <a href="#tab-2-eg3" data-toggle="tab" class="btn btn-dark mr-1">Data Pribadi</a>
                                    <a href="#tab-2-eg4" data-toggle="tab" class="btn btn-dark">Rekening & Pesan cepat</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-0 card-body">
                <div class="tab-content p-3">
                    <div class="tab-pane active p-1" id="tab-2-eg2">
                        <small>* Bagian ini Optional, tidak di isipun tetap bisa menjalankan Affiliate </small>
                        <h5 class="font-weight-bold"><i class="fa fa-code"></i> Pixel Setup</h5>
                        <b>Business settings -> Data sources -> Pixels -> Pilih Pixel -> Copy ID PIXEL </b>
                        <input class="form-control">
                        <br>
                        <br>
                        <strong class="c-primary">1. Template Landing Page Target Bisnis Online</strong><br>
                        <small>Event <b>ViewContent</b> Otomatis Ter-trigger dihalaman ini</small>
                        <input type="text" disabled class="form-control" value="https://member.remotebisnis.com/m_landing_page.php?kaf=39587434922">
                        <strong>Custom Event</strong><br>
                        <small>Contoh: fbq('trackCustom', 'eventSaya'); fbq('track', 'AddToCart'); <u>jangan lupa ';' </u>.</small>
                        <textarea name="custom_pixel[]" class="form-control" placeholder="(Opsional) masukan custom event sesuai kebutuhan"></textarea>
                        <input type="hidden" name="id_link[]" value="1">
                                                    <hr>
                    </div>
                    <div class="tab-pane" id="tab-2-eg3">
                        <div class="p-2">
                            <h6 class="font-weight-bold">Nomor WhatsApp : <button class="btn btn-sm btn-danger"><i class="fa fa-pencil"></i></button></h6>
                            <label>029342394</label>
                            <hr>
                            <h6 class="font-weight-bold">Password : <button class="btn btn-sm btn-danger"><i class="fa fa-pencil"></i></button></h6>
                            <label>**********</label>
                        </div>
                    </div>
                    <div class="tab-pane p-1" id="tab-2-eg4">
                        <h5 class="font-weight-bold">Rekening & Pesan cepat</h5>
                        <p style="font-size: 12px; font-style: italic; ">*Pesan ini otomatis akan mengarah ke No Wa anda sebagai Autofill Text to WA <u>untuk user yang sudah registrasi member Gratis/ Full Akses</u></p>
                        <p>
                            <b>tebal</b> = gunakan *...* untuk menebalkan text di WhatsApp<br>
                            <i>miring</i> = gunakan _..._ untuk memiringkan text di WhatsApp<br>
                            <span style="text-decoration: line-through;">coret</span> = gunakan ~...~ untuk coret text di WhatsApp<br>
                        </p>
                        <h6 class="font-weight-bold"><i class="fa fa-comment"></i> Pesan Cepat Untuk Pengguna Trial :  </h6>
                        <button class="btn btn-sm btn-danger">Gunakan Template teks</button>
                        <textarea class="form-control">
                        </textarea>
                        <br>
                        <h6 class="font-weight-bold"><i class="fa fa-comment"></i> Pesan Cepat Untuk Pengguna Full Akses :  </h6>
                        <button class="btn btn-sm btn-danger">Gunakan Template teks</button>
                        <textarea class="form-control">
                        </textarea>
                        <hr>
                        <h6 class="font-weight-bold"><i class="fa fa-credit-card"></i> Detail info Transfer</h6>
                        <small>Ini Template Pengisian No Rekening, gunakan jika ingin mengatur ulang pengisian No Rekening, copy code dibawah dan klik <b>Sumber/Source</b> di kolom Pengisian No Rekening, lalu Paste Code</small>
                        <textarea class="form-control w-100">
                        &lt;p&gt;No Rekening : ..&lt;/p&gt; &lt;p&gt;Kode Bank : ..&lt;/p&gt; &lt;p&gt;A.N : ...&lt;/p&gt; &lt;p&gt;&amp;nbsp;&lt;/p&gt; &lt;p&gt;No Rekening : ..&lt;/p&gt; &lt;p&gt;Kode Bank : ..&lt;/p&gt; &lt;p&gt;A.N : ...&lt;/p&gt; &lt;div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"&gt;&lt;strong&gt;&lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-bank-bsi.png" style="height:13px; width:40px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-bank-jenius.png" style="height:13px; width:40px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-bank-bni.jpeg" style="height:13px; width:40px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-bank-mandiri.png" style="height:13px; width:40px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-bank-cimb.png" style="height:13px; width:70px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-bank-bri.png" style="height:16px; width:20px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-bank-bca.png" style="height:13px; width:50px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-bank-ovo.png" style="height:15px; width:40px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-gopay.png" style="height:13px; width:55px" /&gt; &lt;img alt="" src="https://remotebisnis.com/wp-content/uploads/2021/10/logo-dana.png" style="height:15px; width:40px" /&gt; &lt;/strong&gt;&lt;/div&gt;
                        </textarea>
                        <small>Text ini akan ditampilkan untuk arahan Transaksi/Transfer, masukan seperti NO REKENING dan catatan lainya sesuai kebutuhan, hapus juga logo bank yang tidak diperlukan
Masukan Beberapa No Rekening Anda (Jika memiliki lebih dari 1 No Rek) dan Hapus Logo Bank yang tidak Di perlukan</small>
                        <textarea class="textarea" id="editor1"></textarea>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    export default {
        mounted() {
            CKEDITOR.replace( 'editor1' )
        }
    };
</script>

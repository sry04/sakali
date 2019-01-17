<template>
<div class="">
<section class="content">
  <div class="row">
     <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="row">
              <div class="col-md-6">
              <div class="box-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Masukan Title">
                </div>
                <div class="form-group">
                  <label for="tipe">Tipe</label>
                  <select name="tipe" id="tipe" class="form-control" placeholder="Pilih Tipe">
                    <option value="Sepatu">Sepatu</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tipe">Kategori</label>
                  <select name="kategori" id="kategori" class="form-control"  placeholder="Pilih Kategori">
                    <option value="Celana">Celana</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="kd_product">Kode Produk</label>
                  <input type="text" class="form-control" id="kd_product" name="kd_product" placeholder="Masukan Kode Produk">
                </div>

                <div class="form-group">
                  <label for="restock">Restock</label>
                  <input type="text" class="form-control" name="restock" id="restock" placeholder="Masukan Tanggal Restock">
                </div>

                <div class="form-group">
                  <label for="jml_produksi">Jumlah Produksi</label>
                  <input type="number" class="form-control" id="jml_produksi" name="jml_produksi" placeholder="Masukan Jumlah Produksi">
                </div>

                <div class="form-group">
                  <label for="harga">Harga</label>
                  <input type="number" class="form-control" id="harga" name="harga" placeholder="Masukan Harga Produk">
                </div>

                <div class="form-group">
                  <label for="link">Link</label>
                  <input type="text" class="form-control" id="link" name="link" placeholder="Masukan Link TokoPedia">
                </div>

                <div class="form-group">
                  <label for="spesifikasi">Spesifikasi</label>
                  <br>
                  <div class="col-md-1"></div>
                  <div class="col-md-11">
                    <input type="checkbox" name="spesifikasi[]" id="spesifikasi[]">Name<br>
                    <input type="checkbox" name="spesifikasi[]" id="spesifikasi[]">Name<br>
                    <input type="checkbox" name="spesifikasi[]" id="spesifikasi[]">Name<br>
                    <input type="checkbox" name="spesifikasi[]" id="spesifikasi[]">Name<br>

                  </div>
                </div>

                <div class="form-group">
                  <label for="warna">Warna</label>
                  <br>
                  <div class="col-md-1"></div>
                  <div class="col-md-11">
                    <input type="checkbox" name="warna[]" id="warna[]">Name<br>
                    <input type="checkbox" name="warna[]" id="warna[]">Name<br>
                    <input type="checkbox" name="warna[]" id="warna[]">Name<br>
                    <input type="checkbox" name="warna[]" id="warna[]">Name<br>

                  </div>
                </div>

                <div class="form-group">
                  <label for="ukuran">Ukuran</label>
                  <br>
                  <div class="col-md-1"></div>
                  <div class="col-md-11">
                    <input type="checkbox" name="ukuran[]" id="ukuran[]">Name<br>
                    <input type="checkbox" name="ukuran[]" id="ukuran[]">Name<br>
                    <input type="checkbox" name="ukuran[]" id="ukuran[]">Name<br>
                    <input type="checkbox" name="ukuran[]" id="ukuran[]">Name<br>

                  </div>
                </div>


              </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <label for="input">Upload Gambar</label>
                    <input type="file" class="form-control-file" accept="image/*" @change="addImagesPRoduct">
                    <!-- ketika menginput file akan menjalankan methods addImagesPRoduct aya opsi delete jeung siap-->
                </div>
                <div class="form-group">
                  <div v-for="(image, index) in form.images">
                    <div class="row" style="margin-top:2%">
                    <div class="col-md-4">
                      <img :src="image.image" class="img-fluid img-responsive" width="100px">
                    </div>
                    <div class="col-md-8">
                      <a href="#" style="font-size:24px; margin-top:15%" class="text-danger mb-2" @click.prevent="form.images.splice(index, 1)">
                        <i class="fa fa-times"></i>
                        </a>
                    </div>
                    </div>
                    <!-- manggil object image anu tadi coba build heula error teu ke ss mun error no error all clear coba cek input gambar keun di tes kedeng tong poho console.log na f12
                    mang,pas di upload eweuh action nanaon
                    -->
                  </div>
                </div>
              </div>
              </div>

              <div class="box-footer">
                <router-link :to="{name: 'InsertProduct'}" class="btn btn-danger">
                  Cancel
                </router-link>
                <button type="submit" class="btn btn-primary">Add</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </div>
  </div>
  <!-- /.row -->
</section>
</div>
</template>

<script>
export default {
  data () {
    return {
      form: {
        title: '',
        type: '',
        category: '',
        code_product: '',
        images: []
      }
    }
  },
  methods: {
    // bkin method convert ka base64 alurna kos kieu
    // input gambar -> loopping -> convert bas 64 -> assign ka form.images arek di hapus eta mang ?
    addImagesPRoduct(e) { // e = event
      if(!e.target.files.length) return // amun filena  euweuh

      let files = e.target.files; // tampung file anu di input ku user

      if(files) { // amun filesna ayaan //let teh naon mang ? sarua kos var, tapi let mah teu bisa duplikat ok ok
        let files_count = files.length; // hitung total images anu d input ku user jadi engke bisa multiple
        for(let i = 0; i < files_count; i++) { // looping kabeh file anu d asupkeun user
          let reader = new FileReader(); // ieu jeung ngacaba file anu d input
          reader.onload = (e) => { // ieu make arrow function, nyaho pan?
            //nah ayeuna urang push ka data from.images
            var vm = this
            vm.form.images.push({
              image: e.target.result // asupkeun ka data image abeh bisa d tampilkan d html bisa teu
            })
          };

          reader.readAsDataURL(files[i]) // convert ka base 64 form uploadna mana? form uploadna nyieun hiji weh ? soalnya kamari anyar
          //sisi kiri doang mang, nyieun heula kedeng //wait// oke solat heula heeh urang mang oke cobaan we ok mantap bisa, kedeng solat heula mang

        }
      }
    }
  }
}
</script>

<style lang="css">
</style>

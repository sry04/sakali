<template>
<div class="">
<section class="content">
  <div class="row">
     <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Warna</h3>
            </div>
            <form role="form" v-on:submit.prevent="addColor">
              <div class="row">
                <div class="col-md-12">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="title">Nama Color</label>
                      <input type="text" class="form-control" v-model="name"  placeholder="Masukan Nama Warna">
                    </div>

                    <div class="form-group">
                      <label>Warna</label>
                      <input type="text" placeholder="Masukan HexaDecimal Color" v-model="color" class="form-control my-colorpicker2">

                    </div>

                  </div>
                </div>
              </div>

              <div class="box-footer">
                <router-link :to="{name: 'ColorProduct'}"  class="btn btn-danger">
                  Cancel
                </router-link>
                <button class="btn btn-primary" type="submit" >Add</button>
              </div>
            </form>
          </div>
        </div>
  </div>

</section>
</div>
</template>

<script>
export default {
  data(){
        return {
          name : '',
        }
    },
    methods: {
      addColor(){
         // console.log(localStorage.getItem('token'));
        let uri = '../../api/warna/add';
        axios.post(uri, {name : this.name}, {
            headers: {
                Authorization: 'Bearer ' + localStorage.getItem('token')
            }
        }).then((response) => {
          this.$router.push({name: 'ColorProduct'});
        });
      }
    }

}

</script>

<style lang="css">
</style>

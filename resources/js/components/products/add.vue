<template>
    <div>
      <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Tên khóa học</label>
                <vs-input
                  type="text"
                  size="default"
                  placeholder="Tên khóa học"
                  class="w-100"
                  v-model="objData.name[0].content"
                />
                <el-button size="small" @click="showSettingLangExist('name')"
                  >Đa ngôn ngữ</el-button
                >
                <div class="dropLanguage" v-if="showLang.title == true">
                  <div
                    class="form-group"
                    v-for="(item, index) in lang"
                    :key="index"
                  >
                    <label v-if="index != 0">{{ item.name }}</label>
                    <input
                      v-if="index != 0"
                      type="text"
                      size="default"
                      placeholder="Tên khóa học"
                      class="w-100 inputlang"
                      v-model="objData.name[index].content"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Chuyên gia</label>
                <vs-input
                  type="text"
                  size="default"
                  placeholder="Chuyên gia"
                  class="w-100"
                  v-model="objData.sku"
                />
              </div>
              <div class="form-group">
                <label>Ngày bắt đầu</label>
                <vs-input
                  type="date"
                  size="default"
                  placeholder=""
                  class="w-100"
                  v-model="objData.date_start"
                />
              </div>
              <div class="form-group">
                <label>Địa điểm tổ chức</label>
                <vs-input
                  type="text"
                  size="default"
                  placeholder=""
                  class="w-100"
                  v-model="objData.address"
                />
              </div>
              <div class="form-group">
                <label>Nội dung</label>
                <TinyMce
                  v-model="objData.content[0].content"
                />
                <el-button size="small" @click="showSettingLangExist('content')">Đa ngôn ngữ</el-button>
                 <div class="dropLanguage" v-if="showLang.content == true">
                    <div class="form-group" v-for="item,index in lang" :key="index">
                        <label v-if="index != 0">{{item.name}}</label>
                        <TinyMce v-if="index != 0" v-model="objData.content[index].content" />
                    </div>
                </div>
              </div>
              <div class="form-group">
                <label>Mô tả ngắn</label>
                <TinyMce
                  v-model="objData.description[0].content"
                />
                <el-button size="small" @click="showSettingLangExist('description')">Đa ngôn ngữ</el-button>
                 <div class="dropLanguage" v-if="showLang.description == true">
                    <div class="form-group" v-for="item,index in lang" :key="index">
                        <label v-if="index != 0">{{item.name}}</label>
                        <TinyMce v-if="index != 0" v-model="objData.description[index].content" />
                    </div>
                </div>
              </div>
              <!-- <div class="form-group">
                  <label>Ảnh đại diện</label>
                  <image-upload
                    v-model="objData.avatar"
                    type="avatar"
                    :title="'danh-muc'"
                  ></image-upload>
              </div> -->
              <div class="form-group">
                <label>Album ảnh</label>
                <ImageMulti v-model="objData.avatar" :title="'san-pham'"/> 
              </div>
              <div class="form-group">
                <label>Ảnh banner</label>
                <ImageMulti v-model="objData.images" :title="'san-pham'"/> 
              </div>
              <!-- <div class="form-group">
                <label>Giá khóa học</label>
                <vs-input
                  type="number"
                  size="default"
                  icon="all_inclusive"
                  class="w-100"
                  v-model="objData.price"
                />
              </div>
              <div class="form-group">
                <label>Phần trăm giảm giá</label>
                <vs-input
                  type="number"
                  size="default"
                  icon="all_inclusive"
                  class="w-100"
                  v-model="objData.discount"
                />
              </div> -->
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <div class="form-group">
                <label>Trạng thái</label>
                <vs-select v-model="objData.status">
                  <vs-select-item value="1" text="Hiện" />
                  <vs-select-item value="0" text="Ẩn" />
                </vs-select>
              </div>
              <div class="form-group">
                <label>Danh mục đào tạo</label>
                <vs-select
                  class="selectExample"
                  v-model="objData.category"
                  placeholder="Danh mục"
                  @change="findCategoryType()"
                >
                <vs-select-item
                    value="0"
                    text="Không danh mục"
                  />
                  <vs-select-item
                    :value="item.id"
                    :text="JSON.parse(item.name)[0].content"
                    v-for="(item, index) in cate"
                    :key="'f' + index"
                  />
                </vs-select>
              </div>
              <div class="form-group">
                <label>Khóa học nổi bật</label>
                <vs-select v-model="objData.discountStatus">
                  <vs-select-item value="1" text="Có" />
                  <vs-select-item value="0" text="Không" />
                </vs-select>
              </div>
            </div>
          </div> 
        </div>
      </div>
      <div class="row fixxed">
        <div class="col-12">
          <div class="saveButton">
            <vs-button color="primary" @click="saveProducts"
              >Thêm mới</vs-button
            >
          </div>
        </div>
      </div>
    </div>
</template>


<script>
import { mapActions } from "vuex";
import TinyMce from "../_common/tinymce";
import ImageMulti from "../_common/upload_image_multi";
import "tinymce/icons/default/icons.min.js";
import InputTag from "vue-input-tag";
export default {
  name: "product",
  data() {
    return {
      cate: [],
      joke: {
        avatar: "delete-sign--v2.png",
      },
      type_cate: [],
      type_two:[],
      showLang: {
        title: false,
        content: false,
        description: false,
      },
      lang: [],
      errors: [],
      objData: {
        lang: "",
        name: [
          {
            lang_code: "vi",
            content: "",
          },
        ],
        size: [
          {
            title: "",
            detail: ""
          },
        ],
        price: 0,
        discount: 0,
        preserve:[
          {
            detail: ""
        }
        ],
        ingredient:'',
        images: [],
        avatar :[],
        date_start: '',
        address: '',
        qty: "",
        description: [
          {
            lang_code: "vi",
            content: "",
          },
        ],
        content: [
          {
            lang_code: "vi",
            content: "",
          },
        ],
        category: 0,
        status: 1,
        discountStatus:0,
        type_cate: 0,
        type_two:0,
        sku: ""
      },
    };
  },
  components: {
    TinyMce,
    ImageMulti,
    InputTag,
  },
  computed: {},
  watch: {
  },
  methods: {
    ...mapActions([
      "editId",
      "saveProduct",
      "listCate",
      "loadings",
      "listLanguage",
      "findTypeCate",
      "findTypeCateTwo"
    ]),
    saveProducts() {
      this.errors = [];
     if(this.objData.name[0].content == '') this.errors.push('Tên không được để trống');
      if(this.objData.content[0].content == '') this.errors.push('Nội dung không được để trống');
      if(this.objData.description[0].content == '') this.errors.push('Mô tả không được để trống');
      if(this.objData.images.length == 0) this.errors.push('Vui lòng chọn banner');
      if(this.objData.avatar.length == 0) this.errors.push('Vui lòng chọn ảnh');
      if(this.objData.category == 0) this.errors.push('Chọn danh mục khóa học');
      if (this.errors.length > 0) {
        this.errors.forEach((value, key) => {
          this.$error(value);
        });
        return;
      } else {
        this.loadings(true);

        this.saveProduct(this.objData)
          .then((response) => {
            this.loadings(false);
            this.$router.push({ name: "listProduct" });
            this.$success("Thêm khóa học thành công");
            this.$route.push({ name: "listProduct" });
          })
          .catch((error) => {
            this.loadings(false);
            // this.$vs.notify({
            //   title: "Thất bại",
            //   text: "Thất bại",
            //   color: "danger",
            //   position: "top-right"
            // });
          });
      }
    },
    findCategoryType() {
      this.findTypeCate(this.objData.category).then((response) => {
        this.type_cate = response.data;
      });
    },
    findCategoryTypeTwo() {
      this.findTypeCateTwo(this.objData.type_cate).then((response) => {
        this.type_two = response.data;
      });
    },
    remoteAr(index,key) {
      if(key == 'size'){
        this.objData.size.splice(index, 1);
      }
      if(key == 'preserve'){
        this.objData.preserve.splice(index, 1);
      }
      if(key == 'curl'){
        this.objData.curl.splice(index, 1);
      }
      if(key == 'thickness'){
        this.objData.thickness.splice(index, 1);
      }
      if(key == 'length'){
        this.objData.length.splice(index, 1);
      }
      if(key == 'line'){
        this.objData.line.splice(index, 1);
      }
      if(key == 'color_product'){
        this.objData.color_product.splice(index, 1);
      }
        
    },
    addInput(key) {
        var oj = {};
        if(key =='size'){
          oj.title = "";
          oj.detail = "";
          this.objData.size.push(oj);
        }
        if(key =='preserve'){
          oj.detail = "";
          this.objData.preserve.push(oj);
        }
        if(key =='curl'){
          oj.detail = "";
          this.objData.curl.push(oj);
        }
        if(key =='thickness'){
          oj.detail = "";
          this.objData.thickness.push(oj);
        }
        if(key =='length'){
          oj.detail = "";
          this.objData.length.push(oj);
        }
        if(key =='line'){
          oj.detail = "";
          this.objData.line.push(oj);
        }
        if(key =='color_product'){
          oj.detail = "";
          this.objData.color_product.push(oj);
        }
        
    },
    showSettingLangExist(value, name = "content") {
      if (value == "content") {
        this.showLang.content = !this.showLang.content;
        this.lang.forEach((value, index) => {
          if (
            !this.objData.content[index] &&
            value.code != this.objData.content[0].lang_code
          ) {
            var oj = {};
            oj.lang_code = value.code;
            oj.content = "";
            this.objData.content.push(oj);
          }
        });
      }
      if (value == "description") {
        this.showLang.description = !this.showLang.description;
        this.lang.forEach((value, index) => {
          if (
            !this.objData.description[index] &&
            value.code != this.objData.description[0].lang_code
          ) {
            var oj = {};
            oj.lang_code = value.code;
            oj.content = "";
            this.objData.description.push(oj);
          }
        });
      }
      if (value == "name") {
        this.showLang.title = !this.showLang.title;
        this.lang.forEach((value, index) => {
          if (
            !this.objData.name[index] &&
            value.code != this.objData.name[0].lang_code
          ) {
            var oj = {};
            oj.lang_code = value.code;
            oj.content = "";
            this.objData.name.push(oj);
          }
        });
      }
    },
    listLang() {
      this.listLanguage()
        .then((response) => {
          this.loadings(false);
          this.lang = response.data;
        })
        .catch((error) => {});
    },
  },
  mounted() {
    this.loadings(true);
    this.listCate().then((response) => {
      this.loadings(false);
      this.cate = response.data;
    });
    this.listLang();
  },
};
</script>
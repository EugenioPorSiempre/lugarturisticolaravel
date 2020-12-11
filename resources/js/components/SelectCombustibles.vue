<template>
  <div>
    <input type="hidden" :name="nombre" v-model="valor" />
    <v-select
      v-model="fields"
      :filterable="false"
      @search="getData"
      :loading="cargar"
      :options="items"
      @input="setChange"
      placeholder="Seleccione una opcion"
      :label="label"
    ></v-select>
  </div>
</template>
<script>
import vselect from "vue-select";
export default {
  name: "SelectCombustibles",
  components: {
    vselect,
  },
  props: {
    selected: {
      type: [Object],
      required: false,
      default: () => {
        return {};
      },
    },
    nombre: {
      type: [String],
      required: true,
      default: () => {
        return "";
      },
    },
    label: {
      type: [String],
      required: true,
      default: () => {
        return "";
      },
    },
    url: {
      type: [String],
      required: true,
      default: () => {
        return "";
      },
    },
  },
  watch: {
    selected: {
      immediate: true,
      handler(val, oldval) {
        this.$set(this, "fields", val);
        this.$set(this, "valor", val.id);
      },
      deep: true,
    },
  },
  data: () => ({
    valor: "",
    fields: {},
    cargar: false,
    items: [],
  }),
  created() {
    this.getData();
  },
  methods: {
    setChange(val) {
      if (val !== null) {
        this.valor = val.id;
      } else {
        this.valor = "";
      }
    },
    getData(val) {
      this.cargar = true;
      axios
        .get(this.url, {
          params: {
            buscar: val,
          },
        })
        .then((resp) => {
          this.cargar = false;
          this.items = resp.data.data;
        })
        .catch(function (error) {
          console.log(error);
        })
        .then(function () {
          // always executed
        });
    },
  },
};
</script>
    
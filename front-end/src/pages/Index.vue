<template>
  <q-page class="flex flex-center">
    <div class="q-pa-md">
      <q-table
        grid
        title="Veiculos"
        :rows="rows"
        :columns="columns"
        row-key="name"
        :filter="filter"
        hide-header
      >
        <template v-slot:top-right>
          <q-input borderless dense debounce="300" v-model="filter" placeholder="Search">
            <template v-slot:append>
              <q-icon name="search" />
            </template>
          </q-input>
        </template>
      </q-table>
    </div>
  </q-page>
</template>

<script>
import { defineComponent } from 'vue';
import { ref } from 'vue'
import veiculosService from '../services/veiculos.service'

export default defineComponent({
  name: 'PageIndex',
  setup () {
    return {
      filter: ref(''),
      columns: [
        { name: 'marca', align: 'center', label: 'Marca', field: 'name', sortable: true },
      ],
      rows: []
    }
  },
  methods:{
    getMarcas (){
      veiculosService.getMarcas.then(Response =>{
        this.rows = Response
      })
    }
  },
  created() {
    this.getMarcas()
  }
})
</script>

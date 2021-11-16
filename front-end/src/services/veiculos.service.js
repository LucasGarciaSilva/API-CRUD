import axios from 'axios'

export default {
  getMarcas: function (params) {
    return axios.get('api/modules/controllers/marcas')
    .then((response) => {
        return response
      }).catch((error) => {
        return error
      })
  }
}


var teste = new Vue({
    el: '#main',
    data: {
        message: "Olá mundo"
    }
})

var header = new Vue({
    el: '#menu',
    data: {
        showLoginModal: false,
        showRegisterModal: false,
        sucessRegister: false,
        newUser: {
            name: '',
            email: '',
            passwd: ''
        }
    },
    methods: {
        register() {
            var data = header.toFormData(header.newUser)
            axios.post("http://localhost/storage/user/register", data)
            .then(function(response) {
                console.log(response.data.message)
            })
            .catch(function(error) {
                console.log(error)
            })
        },
        /**
         * Método responsável por converter um objeto em FormData.
         * 
         * @param {Object} obj Objeto a ser convertido em FormData.
         * @returns {FormData}
         */
        toFormData(obj) {
            var fd = new FormData()
            for(var i in obj) {
                fd.append(i, obj[i])
            }

            return fd
        }
    }
})
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
            username: '',
            email: '',
            passwd: ''
        },
        userLogin: {
            email: '',
            passwd: ''
        }
    },
    methods: {
        register() {
            if(header.checkHeaderForm()) {
                var data = header.toFormData(header.newUser)
                axios.post("http://localhost/storage/user/register", data)
                .then(function(response) {
                    console.log(response.data.message)
                })
                .catch(function(error) {
                    console.log(error)
                })
            }
        },
        login() {
            if(header.checkHeaderForm()) {
                var data = header.toFormData(header.userLogin)
                axios.post("http://localhost/storage/user/login", data)
                .then(function(response) {
                    console.log(response.data.message)
                    window.location.href = "http://localhost/storage"
                })
                .catch(function(error) {
                    console.log(error)
                })
            }
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
        },
        checkHeaderForm() {
            if(header.showLoginModal) {
                var form = document.querySelector("#login-modal")
                var email = form.querySelector("#email").value
                var password = form.querySelector("#passwd").value

                if(email.length == 0 || password.length < 8) {
                    alert("Erro")
                } else {
                    return true
                }

            } else if(header.showRegisterModal) {
                var form = document.querySelector("#register-modal")
                var fullname = form.querySelector("#name").value
                var username = form.querySelector("#username").value
                var email = form.querySelector("#email").value
                var password = form.querySelector("#passwd").value

                if(fullname.length < 3 || username.length < 5 || email.length < 0 || password.length < 8) {
                    alert("ERRO")
                } else {
                    return true
                }
            }
        },
        clearInputs() {
            header.newUser.name = ""
            header.newUser.username = ""
            header.newUser.email = ""
            header.newUser.passwd = ""
        }
    }
})
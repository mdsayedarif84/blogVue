
<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Login
                        <router-link to="/" class="btn btn-outline-success float-end">AdminHome</router-link>
                        <router-link to="/adminHome" class="btn btn-outline-info float-end">Dashboard</router-link>
                    </div>
                    <div class="card-body">
                        <form @submit.prevent="login" >
                            <div class="form-group row mb-3">
                                <label for="email" class=" col-md-4 col-form-label text-end">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input id="email" v-model="form.email" class="form-control" type="email"  name="email" required autocomplete="email" autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-end">Password2</label>
                                <div class="col-md-6">
                                    <input id="password" v-model="form.password" class="form-control" type="password"  name="password" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" >

                                        <label class="form-check-label" for="remember">
                                            Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>
                                        <a class="btn btn-link" href="">
                                            Forgot Your Password?
                                        </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    import {reactive} from 'vue'

    let form    =   reactive({
        email:'',
        password:''
    });
    const login = async()=>{
        await axios.post('/api/login',form)
        .then(response=>{
            console.log(response)
        })
    }
</script>
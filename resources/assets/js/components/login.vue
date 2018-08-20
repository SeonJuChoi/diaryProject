<template>
    <v-app>
        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-dialog
                                v-model="dialog"
                                persistent="true"
                                width="500"
                        >
                        <v-card class="elevation-12" id="login_card">
                            <h2 class="text-md-center">Login</h2>

                            <v-form v-model="valid">
                                <v-text-field
                                        id="user_id"
                                        v-model="user_id"
                                        label="ID"
                                        :rules="[idrules.required]"
                                        required
                                ></v-text-field>
                                <v-text-field
                                        id="user_pw"
                                        v-model="user_pw"
                                        type="password"
                                        :rules="[pwrules.required, pwrules.min]"
                                        label="Password"
                                        required
                                ></v-text-field>
                            </v-form>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn flat large>Login</v-btn>
                            </v-card-actions>
                        </v-card>
                        </v-dialog>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
    import axios  from 'axios';

    export default {

        data() {
            return {
                dialog: true,
                user_id : '',
                user_pw : '',
                idrules: {
                    required: value => !!value || '필수 항목입니다.',
                },
                pwrules: {
                    required: value => !!value || '필수 항목입니다.',
                    min: v => v.length >= 8 || 'Min 8 characters',
                }
            }
        },

        methods : {

        }

    }
</script>

<style>
    #login_card {
        padding: 10px;
        border-radius: 10px;
    }
</style>
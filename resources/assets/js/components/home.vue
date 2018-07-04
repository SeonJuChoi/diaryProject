<template>
    <v-app>
    <v-container style="background-color: white">
        <div style="text-align: center;">
        <h2><b>Card Test</b></h2><br>
        </div>
    <v-layout>
        <v-flex xs12 sm6 offset-sm3>
            <v-card>
                <v-card-media
                        src="/images/sironeko.jpg"
                        height="200px"
                ></v-card-media>

                <v-card-title primary-title>
                    <div>
                        <h3 class="headline mb-0">SiroNekoHaza</h3>
                        <div>Unniga Sironekorul hazago narul kkosigoitta.<br>Hajiman halji anhalji morunda.</div>
                    </div>
                </v-card-title>

                <v-card-actions>
                    <v-btn flat color="orange">Share</v-btn>
                    <v-btn flat color="orange">Explore</v-btn>
                </v-card-actions>
            </v-card>
        </v-flex>
    </v-layout>
    </v-container>
    </v-app>
</template>

<script>
    export default {

    }
</script>
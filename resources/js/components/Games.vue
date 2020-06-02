<template>
    <div class="col-lg-7 col-md-7 col-sm-7 ">
        <div class="card card-lightgray mt-72 mb-2">
            <div class="card-body text-white">
                <h1>{{ gameName }}</h1>
            </div>
        </div>
        <div v-if="gamesTypes">
            <div class="card my-1 mb-3">
                <div class="card-header pr-1 pt-4 pb-5 card-gray">
                </div>
                <div class="card-body rounded p-1">
                    <div class="d-flex align-content-bottom justify-content-between font-weight-bold">
                        <div class="col-sm-4 pl-2 pr-0">
                            <h3 class="">QUESTIONS</h3>
                        </div>
                        <div class="col-sm-8 pl-3 align-content-bottom mt-2">
                            <a type="button" @click="TypeOfGame">PLAY NOW  ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-1 mb-3">
                <div class="card-header pr-1 pt-4 pb-5 card-gray">
                </div>
                <div class="card-body rounded p-1">
                    <div class="d-flex align-content-bottom justify-content-between font-weight-bold">
                        <div class="col-sm-4 pl-2 pr-0">
                            <h3 class="">PUZZLES</h3>
                        </div>
                        <div class="col-sm-8 pl-3 align-content-bottom mt-2">
                            <a type="button">PLAY NOW  ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-1 mb-3">
                <div class="card-header pr-1 pt-4 pb-5 card-gray">
                </div>
                <div class="card-body rounded p-1">
                    <div class="d-flex align-content-bottom justify-content-between font-weight-bold">
                        <div class="col-sm-4 pl-2 pr-0">
                            <h3 class="">TRIVIA</h3>
                        </div>
                        <div class="col-sm-8 pl-3 align-content-bottom mt-2">
                            <a type="button">PLAY NOW  ></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card my-1 mb-3">
                <div class="card-header pr-1 pt-4 pb-5 card-gray">
                </div>
                <div class="card-body rounded p-1">
                    <div class="d-flex align-content-bottom justify-content-between font-weight-bold">
                        <div class="col-sm-4 pl-2 pr-0">
                            <h3 class="">INTERESTS</h3>
                        </div>
                        <div class="col-sm-8 pl-3 align-content-bottom mt-2">
                            <a type="button">PLAY NOW  ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div v-else>
            <div class="card card-lightgray mt-2 mb-2">
                <div class="card-body text-center">
                    <h1>{{ question1 }}</h1>
                </div>
            </div>
            <div class="card card-lightgray mt-3">
                <div class="card-body text-center" v-if="answerType">
                    <div class="row pl-5">
                        <div class="col-sm-4 pb-5 px-2">
                            <a type="button" @click.prevent="TypeOfArtist">
                                <div class="question-box px-2">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-3 mb-2" for="materialInline1"></label>
                                        <h1 class="pt-2">A</h1>
                                    </div>
                                    <p>this is the answer</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb-5 px-2">
                            <a type="button">
                            <div class="question-box p-2">
                                <h1>B</h1>
                                <p class="fs-half">this is the answer</p>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb-5 px-2">
                            <a type="button">
                            <div class="question-box p-2">
                                <h1>C</h1>
                                <p>this is the answer</p>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb-5 px-2">
                            <a type="button">
                            <div class="question-box p-2">
                                <h1>D</h1>
                                <p>this is the answer</p>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb-5 px-2">
                            <a type="button">
                            <div class="question-box p-2">
                                <h1>E</h1>
                                <p>this is the answer</p>
                            </div>
                            </a>
                        </div>
                        <div class="col-sm-4 pb-5 px-2">
                            <a type="button">
                            <div class="question-box p-2">
                                <h1>F</h1>
                                <p>this is the answer</p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center" v-if="kindArtist">
                    <div class="row">
                        <div class="col-sm-4 py-4 px-2">
                            <a type="button" @click="ArtOfType">
                                <div class="artist-box p-2">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4 mb-2" for="materialInline1"></label>
                                    </div>

                                    <h3>Visual Arts</h3>
                                </div>
                            </a>
                        </div>
                            <div class="col-sm-4 py-4 px-2">
                            <a type="button">
                                <div class="artist-box p-2">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4 mb-2" for="materialInline1"></label>
                                    </div>

                                    <h4>Performance Arts</h4>
                                </div>
                            </a>
                        </div>
                            <div class="col-sm-4 py-4 px-2">
                            <a type="button">
                                <div class="artist-box p-2">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4 mb-2" for="materialInline1"></label>
                                    </div>

                                    <h3>Design</h3>
                                </div>
                            </a>
                        </div>
                            <div class="col-sm-4 py-4 px-2">
                            <a type="button">
                                <div class="artist-box p-2">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4 mb-2" for="materialInline1"></label>
                                    </div>

                                    <h3>Music</h3>
                                </div>
                            </a>
                        </div>
                            <div class="col-sm-4 py-4 px-2">
                            <a type="button">
                                <div class="artist-box p-2">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4 mb-2" for="materialInline1"></label>
                                    </div>

                                    <h3>TV & Films</h3>
                                </div>
                            </a>
                        </div>
                            <div class="col-sm-4 py-4 px-2">
                            <a type="button">
                                <div class="artist-box p-2">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4 mb-2" for="materialInline1"></label>
                                    </div>

                                    <h3>Literature</h3>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="card-body text-center" v-if="kindArtType">
                    <div class="row">
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Classical</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Contemporary</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Pop Art</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Cubism</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Art Deco</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Art Nouveau</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Post-Impressionism</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Impressionism</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Modern</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Comics</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Photography</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Graffiti</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Manga</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Cartoon</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3 py-1 px-1">
                            <a type="button">
                                <div class="arttype-box pt-0 px-1">
                                    <div class="form-check form-check-inline d-flex justify-content-start">
                                        <input type="radio" class="form-check-input mr-2" id="materialInline1" name="inlineMaterialRadiosExample">
                                        <label class="form-check-label h1-responsive pr-4" for="materialInline1"></label>
                                    </div>

                                <p class="fs-half">Others</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
    @media (min-width: 576px){
        .col-sm-3 {
            flex: 0 0 25%;
            max-width: 20%;
        }
    }
    .fs-half{
       font-size: 0.8rem;
    }
    .question-box{
        width: 145px;
        height: 140px;
        background-color: #fff;
        border-radius: 5px;
        text-align: center;
        align-content: center;
    }
    .artist-box{
        height: 130px;
        background-color: #fff;
        border-radius: 5px;
        text-align: center;
        align-content: center;
    }
    .arttype-box{
        /* width: 120px; */
        height: 70px;
        background-color: #fff;
        border-radius: 5px;
        text-align: center;
        align-content: center;
    }

    .form-check-input:checked::after{
        content: '✔';
        align-content:center;
    }
</style>
<script>
export default {
    data(){
        return{
            question1:"Question 1: What kind of artist are you?",
            gameName: "Games",
            answerType: true,
            kindArtist: false,
            kindArt:false,
            kindArtType:false,
            gamesTypes:true,
        }
    },

    methods:{
        TypeOfGame(){
            this.gamesTypes = false;
            this.gameName   = "Interests"
        },
        TypeOfArtist(){
            this.question1  = "What would kind of art are you most fond of?";
            this.kindArtist = true;
            this.answerType = false;
        },

        ArtOfType(){
            this.question1   = "What would kind of visual art are you most fond of?";
            this.kindArtist  = false;
            this.kindArtType = true;
        }


    }
}
</script>

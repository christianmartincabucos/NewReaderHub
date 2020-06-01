<template>
    <div class="col-lg-7 col-md-7 col-sm-7 ">
        <div class="card card-lightgray mt-72">
            <div class="card-body text-white">
                <h1>Games</h1>
            </div>
        </div>
        <div class="card card-lightgray mt-3">
            <div class="card-body text-center">
                <h1>Question 1: What kind of artist are you?</h1>
            </div>
        </div>
        <div class="card card-lightgray mt-3">
            <div class="card-body text-center">
                <div class="row pl-5">
                    <div class="col-sm-4 pb-5">
                        <div class="question-box p-2">
                            <div class="form-check form-check-inline py-2 pl-0">
                                <input type="radio" class="form-check-input mr-2" id="materialInline1" hidden="true" name="inlineMaterialRadiosExample">
                                <label class="form-check-label h1-responsive pr-4 mb-2" for="materialInline1">A</label>
                            <!-- <h1>A</h1> -->
                            </div>

                            <p>this is the answer</p>
                        </div>
                    </div>
                    <div class="col-sm-4 pb-5">
                        <div class="question-box p-2">
                            <h1>B</h1>
                            <p>this is the answer</p>
                        </div>
                    </div>
                    <div class="col-sm-4 pb-5">
                        <div class="question-box p-2">
                            <h1>C</h1>
                            <p>this is the answer</p>
                        </div>
                    </div>
                    <div class="col-sm-4 pb-5">
                        <div class="question-box p-2">
                            <h1>D</h1>
                            <p>this is the answer</p>
                        </div>
                    </div>
                    <div class="col-sm-4 pb-5">
                        <div class="question-box p-2">
                            <h1>E</h1>
                            <p>this is the answer</p>
                        </div>
                    </div>
                    <div class="col-sm-4 pb-5">
                        <div class="question-box p-2">
                            <h1>F</h1>
                            <p>this is the answer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
    .question-box{
        width: 130px;
        height: 130px;
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

}
</script>

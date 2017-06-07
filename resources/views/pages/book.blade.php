@extends ('layouts.app')

@section('meta-title', 'Book')

@section('content')

    <div class="main-container">
        <div class="booking-container">
            <div class="header">
                <div id="root" class="container">
                    <modal v-if="showModal" @close="showModal = false">

                        <template slot="header">Consultation Fees</template>

                    You may not have to pay a fee if an agreement has been arranged in advance.


                    </modal>
                </div><!-- /#root -->
            </div><!-- /.header -->



            <div id="TTE-f977d4d2-4d78-4d20-8d7c-b275ba441317"></div>
            <script src="https://d3saea0ftg7bjt.cloudfront.net/embed/js/embed.min.js"></script>
            <script>
                window.TTE.init({
                    targetDivId: "TTE-f977d4d2-4d78-4d20-8d7c-b275ba441317",
                    uuid: "f977d4d2-4d78-4d20-8d7c-b275ba441317"
                });
            </script>


        </div>
    </div>



@endsection

@section('scripts')
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="js/main.js"></script>
@endsection
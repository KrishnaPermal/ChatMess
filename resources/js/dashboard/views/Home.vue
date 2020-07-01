<template>
<div>   
<Tchat></Tchat>
</div>
</template>

<script>
import { apiServices } from '../_services/api.services';
import { authenticationService } from '../_services/authentication.service';
import Tchat from '../../dashboard/views/components/Tchat.vue';
export default {
    components:{
      Tchat,
    }
}

</script>




import { apiServices } from '../../_services/api.services';
import { authenticationService } from '../../_services/authentication.service';

export default {
    data() {
        return {
            friends: []
        }
    },
    created() {
        authenticationService.currentUser.subscribe(x => (this.currentUser = x));
        console.log(this.currentUser.id)
        console.log('toto')
        this.getUsers();
    },
    methods: {
        getUsers() {
            apiServices.get("/api/users/" + this.currentUser.id+"/friends")
            .then(({ data }) => {
                //this.users = data.data.users;
                console.log(data)
                //console.log(this.users)
            })
        },
    }
}
<template>
<div class="row justify-content-center">
        <div class="col-md-12">
                <div class="card">
                  <div class="ml-3 my-2">
                    <h1 class="my-0"><i><img :src="image_src" width="70" height="70" alt=""></i> National Irrigation Administration</h1>
                    <h5 class="my-0">General Santos City</h5>
                    <small><clock-app class="my-0"></clock-app></small>
                  </div>
                <div class="card-header text-white" style="background-color: #1d9622;">
                  <h3><i class="fa fa-inbox fa-2x" aria-hidden="true"></i> Inbox</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                            <thead class="container-laravel text-light">
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Message</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr v-for="(item, index) in messages" :key="item.id" v-if="item.to_department == user.id && item.read_tf == 'N'">
                                <td>{{item.name}}</td>
                                <td>{{item.email}}</td> 
                                <td>{{item.phone_number}}</td>
                                <td>{{item.address}}</td>
                                <!-- Button trigger modal -->
                                <td>
                                <b-btn v-b-modal="modalId(index)" variant="primary"
                                v-b-popover.hover.right="'Open and reply!'"
                                :disabled="item.read_tf =='Y'">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                View
                                <b-badge v-if="item.read_tf == 'Y'" variant="info">Seen</b-badge></b-btn>
                                <!-- Modal Component -->
                                <b-modal :id="'modal' + index"
                                title="View and Reply Message"
                                header-bg-variant="success"
                                :header-text-variant="headerTextVariant"
                                hide-footer
                                >
                                  <b-card :title="'Message from ' + item.name"
                                        class="mb-2"
                                  >
                                  <b-btn
                                  @click="printMsg(item)"
                                  class="float-right"
                                  v-b-popover.hover.right="'Print this message'"
                                  >
                                  <i class="fa fa-print" aria-hidden="true">
                                  </i>
                                  </b-btn>
                                  <small>Address: {{item.address}}</small>
                                  <br>
                                  <small>Contact: {{item.phone_number}}</small>
                                  <hr>
                                  <p class="card-text">
                                    <small>Message: </small> <i>"{{item.message}}"</i>
                                  </p>
                                  <div class="row featurette">
                                    <div class="col-md-10 p-0">
                                    <b-form-input type="text"
                                                  placeholder="Your reply"
                                                  v-model="reply"
                                                  required>
                                    </b-form-input>
                                    </div>
                                    <div class="col-md-2 p-0">
                                     <b-button @click="sendSMS(item)" size="1" variant="primary">
                                       <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    </b-button>     
                                    </div> 
                                    <div class="col-md-12 pt-2">
                                      <p>Or forward</p>
                                    </div>
                                    <div class="col-md-10 p-0">
                                    <b-form-select v-model="selected" :options="options" class="mb-3" />
                                    </div>
                                    <div class="col-md-2- p-0">
                                      <b-button @click="forward(item)" size="1" variant="primary">
                                       <i class="fa fa-share" aria-hidden="true"></i>
                                    </b-button> 
                                    </div>
                                  </div>       
                                </b-card>
                                </b-modal>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
                <div class="card">
                <div class="card-header text-white" style="background-color: #1d9622;"><h3>
                  <i class="fa fa-history" aria-hidden="true">
                    </i> History inbox</h3>
                    </div>
                <div class="card-body">
                                      <table class="table">
                            <thead class="container-laravel text-light">
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Recieved at</th>
                                <th scope="col">View</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr v-for="(item, index) in messages" :key="item.id" v-if="item.to_department == user.id && item.read_tf == 'Y'">
                                <td>{{item.name}}</td>
                                <td>{{item.email}}</td> 
                                <td>{{item.phone_number}}</td>
                                <td>{{item.address}}</td>
                                <td>{{item.created_at}}</td>
                                <td>
                                <b-btn v-b-modal="modalId1(index)" variant="primary"
                                v-b-popover.hover.right="'Open and reply!'"
                                >
                               <i class="fa fa-eye" aria-hidden="true"></i>
                                <b-badge v-if="item.read_tf == 'Y'" variant="info">Seen</b-badge></b-btn>
                                <b-modal :id="'modal' + index"
                                title="View and Reply Message"
                                header-bg-variant="success"
                                :header-text-variant="headerTextVariant"
                                hide-footer
                                >
                                  <b-card :title="'Message from ' + item.name"
                                        class="mb-2"
                                  >
                                  <b-btn
                                  @click="printMsg(item)"
                                  class="float-right"
                                  v-b-popover.hover.right="'Print this message'"
                                  >
                                  <i class="fa fa-print" aria-hidden="true">
                                  </i>
                                  </b-btn>
                                  <small>Address: {{item.address}}</small>
                                  <br>
                                  <small>Contact: {{item.phone_number}}</small>
                                  <hr>
                                  <p class="card-text">
                                    <small>Message: </small> <i>"{{item.message}}"</i>
                                  </p>
                                  <div class="row featurette"> 
                                    <div class="col-md-12 pt-2">
                                      <p>Forward</p>
                                    </div>
                                    <div class="col-md-10 p-0">
                                    <b-form-select v-model="selected" :options="options" class="mb-3" />
                                    </div>
                                    <div class="col-md-2- p-0">
                                      <b-button @click="forward(item)" size="1" variant="primary">
                                       <i class="fa fa-share" aria-hidden="true"></i>
                                    </b-button> 
                                    </div>
                                  </div>       
                                </b-card>
                                </b-modal>
                                </td>
                              </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
</div>
</template>

<script>
import * as jsPDF from 'jspdf'
import * as jsPDFTable from 'jspdf-autotable'
    export default {
      props:['user'],
       data(){
         return{
          myregex:/[1-6]/g,
          image_src: '/storage/web_imgs/logo1.png',
          headerTextVariant: 'light',
          selected:"",
          messages:[],
          reply:'',
          options:[
            '1:Admin',
            '2:Maintenance Department',
            '3:Irrigation Association',
            '4:Construction',
            '5:Billings',
            '6:Permits'
          ]
         }
       },
       created() {
         this.fetchMessages();
       },
       methods:{
        printMsg(item){
          var doc = new jsPDF('p', 'in', 'letter')
          doc.setFont("times", "normal");
          doc.addImage(this.image_src, 'JPEG', 1, .5, 1,1)
          doc.text('National Irrigation Administration', 2.2, 1)
          doc.text('General Santos City', 2.2, 1.3)
          doc.text(item.name, 1, 2)
          doc.text('#'+item.phone_number, 1, 2.2)
          doc.text(item.address, 1, 2.4)
          doc.text('Message:', 1, 3)
          doc.text(1, 3.3, doc.splitTextToSize(item.message, 6.5));
          doc.save('Message from '+item.name+'.pdf')
        },
        modalId(item) {
          return 'modal' + item;
        },
         modalId1(item) {
          return 'modal' + item;
        },
        fetchMessages(){
          fetch('api/apimessages')
          .then(res=> res.json())
          .then(res =>{
            this.messages =res.data
          })
        },
        sendSMS(item){
        item.read_tf='Y'
        fetch('api/apimessage',{
          method: 'put',
          body: JSON.stringify({newitem:item,newreply:this.reply,isthisSMS:'Y'}),
          headers:{
            'content-type':'application/json'
          }
        })
          .then(res=>res.json())
          .then(data =>{
            this.reply=""
            this.fetchMessages()
          })
          .catch(err=>console.log(err))
      },
      forward(item){
        item.to_department=this.selected.match(this.myregex)
        console.log(item.to_department)
        fetch('api/apimessage',{
          method: 'put',
          body: JSON.stringify({newitem:item,isthisSMS:'N'}),
          headers:{
            'content-type':'application/json'
          }
        })
          .then(res=>res.json())
          .then(data =>{
            this.selected=''
            this.fetchMessages()
          })
          .catch(err=>console.log(err))
      },
       }
    }
</script>

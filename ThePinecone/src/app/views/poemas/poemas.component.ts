

 import { Component } from '@angular/core';
 
 import { ApiRequestService } from "../../services/api-request.service";
 
  import { contents } from './poemas.interface';  
 @Component({
  selector: 'app-poemas',
  templateUrl: './poemas.component.html',
  styleUrls: ['./poemas.component.css']
})
export class PoemasComponent {
  public number: number = 1;
  public contents : any = contents;
  public counter: number = 1;

    constructor (public service : ApiRequestService){}
  ngOnInit(){
    this.service.getPoema().subscribe(response=>{

      for (let i = 0; i < response.length; i++) {

        this.contents[i] = {
          imagen: "http://localhost:8001/assets/img/" + response[i].imagen,
          titulo: response[i].titulo,
          texto: response[i].texto
        };
        
      }

    });
  }  
}
 
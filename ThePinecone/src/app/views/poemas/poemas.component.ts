





 import { Component } from '@angular/core';
 
 import { PoemaService } from "../../services/poema.service";
 
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

    constructor (public service : PoemaService){}
  ngOnInit(){
    this.service.getPoema().subscribe(response=>{

      for (let i = 0; i < this.contents.length; i++) {

        this.contents[i] = {
          imagen: "http://localhost:8001/assets/img/" + response[i].imagen,
          Titulo: response[i].Titulo,
          texto: response[i].texto
        };
        
      }

    });
  }  
}
 
import { Component } from '@angular/core';

import { ApiRequestService } from "../../services/api-request.service";

import { contents } from './contenido.interface';

@Component({
  selector: 'app-contenido',
  templateUrl: './contenido.component.html',
  styleUrls: ['./contenido.component.css']
})
export class ContenidoComponent {
  public number: number = 1;
  public contents : any = contents;
  public counter: number = 1;

    constructor (public service : ApiRequestService){}
  ngOnInit(){
    this.service.getLibro().subscribe(response=>{
      for (let i = 0; i < response.length; i++) {

        this.contents[i] = {
          imagen: "http://localhost:8001/assets/img/" + response[i].imagen,
          titol: response[i].titol,
          descripcion: response[i].descripcion
        };
        
      }

    });
  }  
}

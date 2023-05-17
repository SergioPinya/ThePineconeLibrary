import { Component,Output,EventEmitter } from '@angular/core';

import { ApiRequestService } from "../../services/api-request.service";
 
import { contents } from './libros.interface';  

@Component({
  selector: 'app-libros',
  templateUrl: './libros.component.html',
  styleUrls: ['./libros.component.css']
})
export class LibrosComponent {
  public number: number = 1;
  public contents : any = contents;
  public counter: number = 1;
  @Output() indice=new EventEmitter<number>();

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
  public contenido(index:number){
    this.indice.emit(index)
  }

}
 
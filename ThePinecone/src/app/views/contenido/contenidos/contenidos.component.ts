import { Component,Input } from '@angular/core';

@Component({
  selector: 'app-contenidos',
  templateUrl: './contenidos.component.html',
  styleUrls: ['./contenidos.component.css']
})
export class ContenidosComponent {
  @Input() contenido: string ="";

}

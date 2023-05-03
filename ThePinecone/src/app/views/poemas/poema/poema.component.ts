import { Component,Input } from '@angular/core';

@Component({
  selector: 'app-poema',
  templateUrl: './poema.component.html',
  styleUrls: ['./poema.component.css']
})
export class PoemaComponent {
  @Input() imagen: string="";
  @Input() Titulo: string ="";
  @Input() texto: string ="";
}

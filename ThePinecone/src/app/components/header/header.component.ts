import { Component,Input } from '@angular/core';

@Component({
  selector: 'app-header',
  templateUrl: './header.component.html',
  styleUrls: ['./header.component.css']
})
export class HeaderComponent {
 /* class="nav-link */
 public navigation: boolean = false;

 public onClick(): void {
   this.navigation = !this.navigation;
 }
}

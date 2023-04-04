import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LibrosComponent } from './views/libros/libros.component';
import { PoemasComponent } from './views/poemas/poemas.component';


const routes: Routes = [
  { path: 'libros', component: LibrosComponent },
  { path: 'poemas', component: PoemasComponent },
 
  { path: '', redirectTo: 'poemas', pathMatch: 'full'}
  

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

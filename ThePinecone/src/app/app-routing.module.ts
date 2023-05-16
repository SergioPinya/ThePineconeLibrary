import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { LibrosComponent } from './views/libros/libros.component';
import { PoemasComponent } from './views/poemas/poemas.component';
import { QuienesSomosComponent } from './views/quienes-somos/quienes-somos.component';

const routes: Routes = [
  { path: 'libros', component: LibrosComponent },
  { path: 'poemas', component: PoemasComponent },
  { path: 'quienesSomos', component: QuienesSomosComponent },

 
  { path: '', redirectTo: 'poemas', pathMatch: 'full'}
  

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

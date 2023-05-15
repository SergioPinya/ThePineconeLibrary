import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppComponent } from './app.component';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { PoemasComponent } from './views/poemas/poemas.component';
import { LibrosComponent } from './views/libros/libros.component';
import { AppRoutingModule } from './app-routing.module';
import { LibroComponent } from './views/libros/libro/libro.component';
import { PoemaComponent } from './views/poemas/poema/poema.component';
import { HttpClientModule } from '@angular/common/http';
import { ContenidoComponent } from './views/contenido/contenido.component';
import { ContenidosComponent } from './views/contenido/contenidos/contenidos.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    FooterComponent,
    PoemasComponent,
    PoemaComponent,
    LibrosComponent,
    LibroComponent,
    ContenidoComponent,
    ContenidosComponent,
    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

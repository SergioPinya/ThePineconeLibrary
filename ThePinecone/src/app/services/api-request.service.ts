import { Injectable } from '@angular/core';
import { Observable } from "rxjs";
import { HttpClient } from '@angular/common/http'


import { Poema } from '../models/poema';
import { Libro } from '../models/libro';


@Injectable({
  providedIn: 'root'
})
export class ApiRequestService {

  constructor( public http : HttpClient) { }
  Poemas = "http://localhost:8001/api/Poema"
  Libro = "http://localhost:8001/api/Libro"


  public getPoema() : Observable<Poema[]> {
    return this.http.get<Poema[]>(this.Poemas)
  }
  public getLibro() : Observable<Libro[]> {
    return this.http.get<Libro[]>(this.Libro)
  }
}

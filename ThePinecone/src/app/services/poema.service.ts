import { Injectable } from '@angular/core';
import { Observable } from "rxjs";
import { HttpClient } from '@angular/common/http'


import { Poema } from '../models/poema/poema';



@Injectable({
  providedIn: 'root'
})
export class PoemaService {

  constructor( public http : HttpClient) { }
  Poema = "http://localhost:8001/api/Poema"

  public getPoema() : Observable<Poema[]> {
    return this.http.get<Poema[]>(this.Poema)
  }
}

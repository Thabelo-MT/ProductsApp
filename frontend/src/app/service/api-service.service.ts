import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ApiServiceService {

  constructor(private http:HttpClient) {  }



  getProducts(){
    const httpOptions = {
      headers: new HttpHeaders({
        'Control-Allow-Origin':'*'
      })
    };
    return this.http.get<any>('http://localhost:8080/api.php',httpOptions);
  }

  getProduct(id:any){
    const httpOptions = {
      headers: new HttpHeaders({
        'Control-Allow-Origin':'*'
      })
    };
    return this.http.get<any>('http://localhost:8080/product.php?id='+id,httpOptions);
  }

  deleteProducts(id:string){
    let selectedType = {
      type: id
    }
    let option = {headers:new HttpHeaders({'Content-type': 'application/json'})};
    return this.http.get<any>('http://localhost:8080/delete.php?id='+id,option);
  }

  updateProducts(product:any){
    let d = product;
    let url =`http://localhost:8080/update.php?id=${d.id}&Name=${d.Name}&Price=${d.Price}&Description=${d.Description}&quantity_on_stock=${d.quantity_on_stock}`;
    let option = {headers:new HttpHeaders({'Content-type': 'application/json','Encoding-Accept':'application/x-www-form-urlencoded'})};
    return this.http.put<any>(url,option);
  }

  addProducts(product:any = []){
    let d = product;
    let url =`http://localhost:8080/add.php?Name=${d.Name}&Price=${d.Price}&Description=${d.Description}&quantity_on_stock=${d.quantity_on_stock}`;
    let option = {headers:new HttpHeaders({'Content-type': 'application/json','Encoding-Accept':'application/x-www-form-urlencoded'})};
    return this.http.put<any>(url,option);
  }
}

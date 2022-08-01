import { ThisReceiver } from '@angular/compiler';
import { Component, OnInit } from '@angular/core';
import { ApiServiceService } from '../service/api-service.service';

@Component({
  selector: 'app-products',
  templateUrl: './products.component.html',
  styleUrls: ['./products.component.scss']
})
export class ProductsComponent implements OnInit {
  isDeleted:boolean = false;
  products:any =[];
  constructor(private apiService:ApiServiceService) { }

  ngOnInit(): void {
    this.getProducts();
  }

  getProducts(){
    this.apiService.getProducts().subscribe((results)=>{
      console.log(results);

      this.products = results;
    });
  }

  deleteProduct(id:any){
    this.apiService.deleteProducts(id).subscribe((results)=>{
      if (results.message==="deleted") {
        this.isDeleted= true;
      }
      else{
        console.log('delete failed',results);

      }

      console.log(results);

    });
  }

  updateProduct(product:any){
    this.apiService.updateProducts(product).subscribe((results)=>{
      // if (results==="deleted") {
      //   this.isDeleted= true;
      // }
      // else{
      //   console.log('delete failed',results);

      // }

      console.log(results);

    });
  }

  addProduct(){
    this.apiService.addProducts().subscribe((results)=>{
      // if (results==="deleted") {
      //   this.isDeleted= true;
      // }
      // else{
      //   console.log('delete failed',results);

      // }

      console.log(results);

    });
  }
}

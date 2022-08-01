import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { AddProductComponent } from './add-product/add-product.component';
import { ProductsComponent } from './products/products.component';
import { UpdateProductComponent } from './update-product/update-product.component';

const routes: Routes = [
  { path: 'product', component: ProductsComponent },
  {path: 'add',component: AddProductComponent},
  {path: 'update/:id',component: UpdateProductComponent},
  { path: '**', redirectTo: 'product' },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <h3>Organizacion</h3>
    <table>
        <thead>
        <tr>
            <th style="background-color: #caff96;">NOMBRE</th>
            <th>{{ $organizacion->nombre }}</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96; ">SIGLA</td>
                <td>{{ $organizacion->sigla }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;">DEPARTAMENTO</th>
            <th>{{ $organizacion->departamento }}</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">PROVINCIA</td>
                <td>{{ $organizacion->provincia }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;">MUNICIPIO</th>
            <th>{{ $organizacion->municipio }}</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">REPRESENTANTE</td>
                <td>{{ $organizacion->representante }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;">DIRECCION</th>
            <th>{{ $organizacion->direccion }}</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">TELEFONO</td>
                <td>{{ $organizacion->telefono }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;">CORREO</th>
            <th>{{ $organizacion->correo }}</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">ORGANIZACION</td>
                <td>{{ $organizacion->organizacion }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;">NIVEL</th>
            <th>{{ $organizacion->nivel }}</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">Nro. COMUNIDADES</td>
                <td>{{ $organizacion->nro_comunidades }}</td>
            </tr>
        </tbody>

    </table>

    <h3>Representacion</h3>
    <table>
        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>NOMBRE PRESIDENTE</h4></th>
            <th><h4>{{ $representacion->nombre_presi }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">Telf. PRESIDENTE</td>
                <td>{{ $representacion->telefono_presi }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>CORREO PRESIDENTE</h4></th>
            <th><h4>{{ $representacion->correo_presi }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">NOMBRE VICEPRESIDENTE</td>
                <td>{{ $representacion->nombre_vicep }}</td>
            </tr>
        </tbody>


        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>Telf. VICEPRESIDENTE</h4></th>
            <th><h4>{{ $representacion->telefono_vicep }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">CORREO VICEPRESIDENTE</td>
                <td>{{ $representacion->correo_vicep }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>NOMBRE GERENTE</h4></th>
            <th><h4>{{ $representacion->nombre_geren }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">Telf. GERENTE</td>
                <td>{{ $representacion->telefono_geren }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>CORREO GERENTE</h4></th>
            <th><h4>{{ $representacion->correo_geren }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">Nro. VARONES</td>
                <td>{{ $representacion->nro_var_tra }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>NUMERO DE MUJERES</h4></th>
            <th><h4>{{ $representacion->nro_muj_tra }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">TOTAL PERSONAS</td>
                <td>{{ $representacion->nro_pers_perm }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>PERSONAL EVENTUAL</h4></th>
            <th><h4>{{ $representacion->nro_pers_even }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">PERSONAL JOVEN</td>
                <td>{{ $representacion->nro_jove }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>SOCIOS</h4></th>
            <th><h4>{{ $representacion->socios_son }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">SOCIOS VARONES</td>
                <td>{{ $representacion->nro_var_soc }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>SOCIOS MUJERES</h4></th>
            <th><h4>{{ $representacion->nro_muj_soc }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">Nro. PROMEDIO DE MIEMBROS POR FAMILIA</td>
                <td>{{ $representacion->nro_pro_mie }}</td>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <td style="background-color: #caff96;">Nro. TOTAL BENEFICIARIOS INDERECTOS</td>
                <td>{{ $representacion->tot_bene }}</td>
            </tr>
        </tbody>

    </table>

    <h3>Problemas de Representacion</h3>
    <table>
        <thead>
        <tr>
            <th><h4>Descripcion</h4></th>
        </tr>
        </thead>
        <tbody>
          @foreach($pros_repre as $pro)
            <tr>
                <td>{{ $pro->descripcion }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>

    <h3>Datos Organizacionales</h3>
    <table>
        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>FECHA DE FUNDACION</h4></th>
            <th><h4>{{ $organizacionales->fech_funda }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th style="background-color: #caff96;"><h4>FECHA DE AFILIACION AOPEB</h4></th>
                <th><h4>{{ $organizacionales->anio_afili }}</h4></th>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <th style="background-color: #caff96;"><h4>PERSONEIA JURIDICA</h4></th>
                <th><h4>{{ $organizacionales->perso_juri }}</h4></th>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>MANUAL DE FUNCIONES</h4></th>
            <th><h4>{{ $organizacionales->manu_func }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th style="background-color: #caff96;"><h4>RAU</h4></th>
                <th><h4>{{ $organizacionales->rau }}</h4></th>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <th style="background-color: #caff96;"><h4>TARJETA EMPRESARIAL</h4></th>
                <th><h4>{{ $organizacionales->targ_empr }}</h4></th>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>REGISTRO SANITARIO</h4></th>
            <th><h4>{{ $organizacionales->regi_sani }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <th style="background-color: #caff96;"><h4>SELLO SPG</h4></th>
                <th><h4>{{ $organizacionales->sello_spg }}</h4></th>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <th style="background-color: #caff96;"><h4>CERTIFICACION ORGANICA</h4></th>
                <th><h4>{{ $organizacionales->certi_orga }}</h4></th>
            </tr>
        </tbody>


    </table>

    <h3>Problemas Organizacionales</h3>
    <table>
        <thead>
        <tr>
            <th><h4>Descripcion</h4></th>
        </tr>
        </thead>
        <tbody>
          @foreach($pros_orga as $pro)
            <tr>
                <td>{{ $pro->descripcion }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>

    <h3>Datos Administrativos</h3>
    <table>
        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>SISTEMA CONTABLE</h4></th>
            <th><h4>{{ $administrativo->sis_cont }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">MANUAL DE FUNCIONES</td>
                <td>{{ $administrativo->man_func }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>CALCULO DE COSTOS</h4></th>
            <th><h4>{{ $administrativo->cal_cost }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">INVENTARIO</td>
                <td>{{ $administrativo->inven }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>MANUAL DE PROCESOS</h4></th>
            <th><h4>{{ $administrativo->man_proc }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">PLAN DE NEGOCIOS</td>
                <td>{{ $administrativo->pla_nego }}</td>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <td style="background-color: #caff96;">IMPUESTOS AL DIA</td>
                <td>{{ $administrativo->imp_dia }}</td>
            </tr>
        </tbody>

    </table>

    <h3>Problemas Administrativos</h3>
    <table>
        <thead>
        <tr>
            <th><h4>Descripcion</h4></th>
        </tr>
        </thead>
        <tbody>
          @foreach($pros_orga as $pro)
            <tr>
                <td>{{ $pro->descripcion }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>

    <h3>Datos Productivos</h3>
    <table>
        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>ACTIVIDAD PRINCIPAL DE LA ORGANIZACION</h4></th>
            <th><h4>{{ $productivo->acti_prin_orga }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">GENERAN INGRESO POR: </td>
                <td>{{ $productivo->rubr_prin }}</td>
            </tr>
        </tbody>

        <thead>
        <tr>
            <th style="background-color: #caff96;"><h4>OTRAS ACTIVIDADES DE LA REGION: </h4></th>
            <th><h4>{{ $productivo->orig_prod }}</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td style="background-color: #caff96;">RUBRO PRINCIPAL: </td>
                <td>{{ $productivo->actividades_ingre }}</td>
            </tr>
        </tbody>

        <tbody>
            <tr>
                <td style="background-color: #caff96;">ORIGEN DE PRODUCCION: </td>
                <td>{{ $productivo->actividades_orga }}</td>
            </tr>
        </tbody>

    </table>

    <h3>Productos</h3>
    <table>
        <thead>
        <tr>
            <th><h4>Producto</h4></th>
            <th><h4>Caracteristicas</h4></th>
            <th><h4>Presentacion comercial</h4></th>
            <th><h4>Veces producidas por año</h4></th>
            <th><h4>Epocas</h4></th>
            <th><h4>Volumen producido en (Kg) por año</h4></th>
            <th><h4>Cantidad destinada a otros fines en (Kg)</h4></th>
            <th><h4>Cantidad vendida al mercado en (Kg)</h4></th>
        </tr>
        </thead>
        <tbody>
          @foreach($productos as $pro)
            <tr>
                <td>{{ $pro->producto }}</td>
                <td>{{ $pro->caracteristicas }}</td>
                <td>{{ $pro->prese_com }}</td>
                <td>{{ $pro->veces_pro }}</td>
                <td>{{ $pro->epoca }}</td>
                <td>{{ $pro->equi_ur }}</td>
                <td>{{ $pro->cant_dest }}</td>
                <td>{{ $pro->cant_vend }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>

    <h3>Productos vendidos</h3>
    <table>
        <thead>
        <tr>
            <th><h4>Productos</h4></th>
            <th><h4>Finca (rescatista)</h4></th>
            <th><h4>Centro acopio comprador</h4></th>
            <th><h4>Ferias</h4></th>
            <th><h4>Mercados</h4></th>
            <th><h4>Tiendas</h4></th>
            <th><h4>Otros</h4></th>
        </tr>
        </thead>
        <tbody>
          @foreach($productos_vend as $pro)
            <tr>
                <td>{{ $pro->producto }}</td>
                <td>{{ $pro->finca_resc }}</td>
                <td>{{ $pro->centr_comp }}</td>
                <td>{{ $pro->feria }}</td>
                <td>{{ $pro->mercado }}</td>
                <td>{{ $pro->tienda }}</td>
                <td>{{ $pro->otro }}</td>
            </tr>
          @endforeach
        </tbody>
    </table>

    <h3>Produccion Ecologica</h3>
    <table>
        <thead>
        <tr>
            <th><h4>porcentaje de area promedio que produce el socio</h4></th>
            <th><h4>porcentaje de socios que tienen certificacion</h4></th>
            <th><h4>area promedio por socio esta certificada</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $produ_eco->pro_soc }}</td>
                <td>{{ $produ_eco->cer_soc }}</td>
                <td>{{ $produ_eco->sup_soc }}</td>
            </tr>
        </tbody>
    </table>

    <h3>Mercado</h3>
    <table>
        <thead>
        <tr>
            <th><h4>Normas Sanitarias (Calidad, inocuidad)</h4></th>
            <th><h4>Tamaño</h4></th>
            <th><h4>Tipo de insumos y materia prima</h4></th>
            <th><h4>Entrega oportuna</h4></th>
            <th><h4>Cantidades (volumen)</h4></th>
            <th><h4>Empaque</h4></th>
            <th><h4>Etiquetado</h4></th>
            <th><h4>Duracion del producto</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $mercado->norm_san }}</td>
                <td>{{ $mercado->tama }}</td>
                <td>{{ $mercado->mate_pri }}</td>
                <td>{{ $mercado->entr_opr }}</td>
                <td>{{ $mercado->cant }}</td>
                <td>{{ $mercado->empa }}</td>
                <td>{{ $mercado->etiq }}</td>
                <td>{{ $mercado->dura_pro }}</td>
            </tr>
        </tbody>
    </table>

    <h3>Beneficios</h3>
    <table>
        <thead>
        <tr>
            <th><h4>nro Mujeres</h4></th>
            <th><h4>nro Varones</h4></th>
            <th><h4>Especialidad</h4></th>
            <th><h4>nro Especialistas ecologicos</h4></th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $beneficio->cant_muj }}</td>
                <td>{{ $beneficio->cant_var }}</td>
                <td>{{ $beneficio->espe }}</td>
                <td>{{ $beneficio->pro_eco }}</td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
                <td>Socios cumplen funciones o son lideres</td>
                <td>{{ $bene_lider->func_lid }}</td>
            </tr>
        </tbody>
    </table>
</html>

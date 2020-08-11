<nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item">
              <a href="./index.php" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Inicio
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fa fa-book" aria-hidden="true"></i>
                <span>Asignaturas</span>
              </a>
              <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                  <h6 class="collapse-header">Asignaturas:</h6>
                  <?php
                  if ($result2->num_rows > 0) {
                    while ($row = $result2->fetch_assoc()) {
                  ?>
                      <a class="collapse-item" href="./subject.php?codigoAsignatura=<?php echo $row['COD_ASIGNATURA'] ?>"><i class="fas fa-fw fa-book"></i>
                        <span><?php echo $row["NOMBRE"]; ?></span></a>
                    <?php
                    }
                  } else { ?>
                    <a class="collapse-item" href="#"><i class="fas fa-fw fa-book"></i>
                      <span>NINGUNA</span></a>
                  <?php } ?>
                </div>
              </div>
            </li>
            <hr class="sidebar-divider">

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
              <a class="nav-link collapsed" href="./grade.php" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-check-circle"></i>
                <span>Calificaciones</span>
              </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
              <a class="nav-link collapsed" href="./assistance.php" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-child"></i>
                <span>Asistencia</span>
              </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
              <a class="nav-link collapsed" href="./schedule.php" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-calendar"></i>
                <span>Horario</span>
              </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item">
              <a class="nav-link collapsed" href="./changePassword.php" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                <span>Cambio de contraseña</span>
              </a>
            </li>

        </nav>
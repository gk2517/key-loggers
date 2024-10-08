
<style>
    .vault-door-outer {
  position:relative;
  width:500px;
  height:500px;
  background:rgb(235,235,235);
  border-radius:6%;
  
  .vault-door-inner {
    position:absolute;
    margin:52px;
    width:390px;
    height:390px;
    background:rgb(219,219,219);
    border-radius:25%;
    
    .vault-door-lock-shadow {
      position:absolute;
      width:340px;
      height:180px;
      background:-webkit-linear-gradient(rgba(160,160,160, .2), transparent);
      margin:170px 90px;
      transform:rotate(-45deg);
      transition:all .05s ease-out;
    }
    
    .vault-door-lock-wrapper {
      position:absolute;
      width:190px;
      height:190px;
    }
    
    .vault-door-lock {
      background:rgb(185,185,185);
    }
    
    .vault-door-circle {
      position:absolute;
      width:310px;
      height:310px;
      margin:40px;
      border-radius:50%;
    }
    
    .vault-door-pistons {
      position:absolute;
      width:340px;
      height:340px;
      margin:180px 25px;
      background:none;
      
      .piston {
        position:absolute;
        background:rgb(185,185,185);
        width:340px;
        height:30px;
        border-radius:8px;
        transition:all .05s ease-out;
        
        &.piston2{
          transform:rotate(45deg);
        }
        &.piston3{
          transform:rotate(90deg);
        }
        &.piston4{
          transform:rotate(135deg);
        }
      }
    }
    
    .vault-door-handle-shadow {
      position:absolute;
      background:rgb(160,160,160);
      width:150px;
      height:150px;
      margin:120px;
      border-radius:50%;
    }
    
    .vault-door-handle-long-shadow {
      position:absolute;
      background:-webkit-linear-gradient(rgb(160,160,160), transparent);
      width:186px;
      height:186px;
      margin:165px;
      transform:rotate(-45deg);
    }
    
    .vault-door-handle {
      position:absolute;
      border:solid 23px rgb(214,214,214);
      width:140px;
      height:140px;
      margin:102px;
      border-radius:50%;
      transition:all .3s ease-in-out;
      
      .handle-bar {
        position:absolute;
        background:rgb(214,214,214);
        height:22px;
        width:140px;
        margin:59px 0;
        
        &.bar1 {
          transform:rotate(45deg);
        }
        
        &.bar2 {
          transform:rotate(135deg);
        }
      }
    }
  }
  
  &.vault-door-outer:hover {
    .vault-door-lock-shadow {
      width:300px;
      margin:150px 90px;
      transition:all .2s ease-out;
    }
    .piston {
      width:310px;
      margin-left:15px;
      margin-right:15px;
      transition:all .2s ease-out;
    }
    .vault-door-handle {
      transform:rotate(-180deg);
      transition:all .7s ease-in-out;
    }
  }
}
</style>
<center><div class="vault-door-outer">
  <div class="vault-door-inner">
    <div class="vault-door-lock-shadow">
    </div>
    <div class="vault-door-lock-wrapper">
      <div class="vault-door-lock vault-door-circle">
      </div>
      <div class="vault-door-lock vault-door-pistons">
        <div class="piston piston1">
        </div>
        <div class="piston piston2">
        </div>
        <div class="piston piston3">
        </div>
        <div class="piston piston4">
        </div>
      </div>
    </div>
    <div class="vault-door-handle-shadow">
    </div>
    <div class="vault-door-handle-long-shadow">
    </div>
    <div class="vault-door-handle">
      <div class="handle-bar bar1">
      </div>
      <div class="handle-bar bar2">
      </div>
    </div>
  </div>
</div></center>